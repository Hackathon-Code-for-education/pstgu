<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $find = User::where('email', session('email'))->first();

        if ($find === null) {
            return redirect()->route('signin');
        }

        if ($find->verified != 1) {
            return redirect()->route('verified');
        }

        return $next($request);
    }
}
