<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSellerStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next):Response
    {
        $user = Auth::user();

        // تحقق إذا كان المستخدم هو Seller
        if ($user->hasRole('Seller')) {
            // إذا كانت حالة البائع pending وأرسل إلى صفحة الانتظار
            if ($user->status == 'pending' && !$request->routeIs('seller.waiting')) {
                return redirect()->route('seller.waiting');
            }

            // إذا كانت حالة البائع rejected، أخرجه من النظام
            if ($user->status == 'rejected') {
                auth()->logout();
                return redirect()->route('login')->withErrors(['account' => 'Your account has been rejected.']);
            }
        }

        // متابعة الطلب إذا كان كل شيء صحيح
        return $next($request);
    }
}
