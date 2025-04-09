<?php

namespace App\Http\Middleware;

use App\Models\Restaurant;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class CheckVendorSlug
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->route('vendor_slug')) {
            $vendor_slug = $request->route('vendor_slug');
            $vendor = Restaurant::where('slug', $vendor_slug)->first();

            if (!$vendor) {
                return redirect()->route('not.found'); // أو يمكنك إعادة توجيه المستخدم إلى صفحة خطأ مخصصة
            }

            $request->attributes->set('vendor', $vendor);
        }

        return $next($request);
    }
}
