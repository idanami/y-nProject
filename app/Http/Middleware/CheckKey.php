<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $key_path = env('API_KEY_PATH');
        if($request->header('api-key') == $key_path)
            return $next($request);
        return redirect('/');
    }
}
