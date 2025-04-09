<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerAuthController extends Controller
{



    protected $vendor;
    protected $slug;


    public function __construct(Request $request)
    {
        $this->slug = $request->route('vendor_slug');
        $this->vendor = Restaurant::where('slug', $this->slug)->first();
    }
    public function loginForm(Request $request)
    {

        return view('customer.auth.login', ['vendor' => $this->vendor])->with(['url' => session('intended')]);
    }

    public function login(Request $request)
    {
        // تعديل بيانات الاعتماد لتكون متوافقة مع الجدول
        $credentials = $request->only('phone', 'password');
        if (Auth::guard('customer')->attempt($credentials)) {

            return redirect()->intended(route('vendor.index', ['vendor_slug' => $this->slug]));
        }

        return redirect()->back()->withInput($request->only('phone', 'remember'))
            ->withErrors(['phone' => 'Invalid phone or password.']);
    }

    public function registerForm()
    {
        return view('customer.auth.register', ['vendor' => $this->vendor]);
    }

    public function register(Request $request)
    {

        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|unique:customers',
            'password' => 'required|string|min:8|confirmed|',
        ]);
        $customer = Customer::create([
            'name' => $request->name,
            'phone' => $request->phone, // استخدام رقم الهاتف بدلاً من البريد الإلكتروني
            'password' => Hash::make($request->password),
        ]);


        Auth::guard('customer')->login($customer);

        return redirect()->intended(route('vendor.index', ['vendor_slug' => $this->slug]));
    }

    public function logout()
    {

        Auth::guard('customer')->logout();

        return redirect()->route('customer.login', $this->slug);
    }
}
