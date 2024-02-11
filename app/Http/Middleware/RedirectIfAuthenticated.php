<?php

namespace App\Http\Middleware;

use Closure;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\AttendanceController;
use Spatie\Url\Url;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        $previousURL = Url::fromString($request->session()->previousUrl() ?? '');
        $currentURL = Url::fromString($request->url() ?? '');

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if ($previousURL->getSegment(1) == 'signattendance'){
                    return AttendanceController::attendance($previousURL->getSegment(2) ?? -1);
                } elseif ($currentURL->getSegment(1) == 'signattendance'){
                    return AttendanceController::attendance($currentURL->getSegment(2) ?? -1);
                } 
                return redirect(RouteServiceProvider::HOME);  
            }
        }

        return $next($request);
    }
}
