<?php


namespace App\Http\Middleware;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorOrUser
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        if (Auth::guard('web')->check() == false && Auth::guard('vendor')->check() == false)
        {
            /**
             * not user kick out
             */

            return redirect()->route("login");
        }

        return $next($request);
    }
}
