<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        //dd($request);
        $request->authenticate();

        $request->session()->regenerate();
        $user = Auth::user();
        $role = request('role'); // جلب الدور المختار من نموذج تسجيل الدخول

        if ($role == 'admin' && $user->hasRole('Admin')) {
            return redirect()->route('admin.dashboard');
        }

        // تحقق من اختيار Seller
        if ($role == 'seller' && $user->hasRole('Seller')) {
            if ($user->status == 'pending') {
                return redirect()->route('seller.waiting');
            } elseif ($user->status == 'approved') {
                return redirect()->route('seller.dashboard');
            } else {
                auth()->logout();
                return redirect()->route('login')->withErrors(['account' => 'Your account has been rejected.']);
            }
        }

        // في حال لم يتم اختيار الدور الصحيح
        auth()->logout();
        return redirect()->route('login')->withErrors(['role' => 'تم اختيار دور غير صحيح.']);

        //return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
