<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $slug = $request->route('vendor_slug');
        if (!Auth::guard('customer')->check()) {
            Session::put('url.intended', $request->url());
            if ($request->ajax()) {
                return response()->json(['message' => 'Please log in to comment or rate this product.'], 401);
            }
            return redirect()->route('customer.login', $slug)
                ->with(['info' => 'Please log in to Make this action.']);
        }

        return $next($request);
    }
}
