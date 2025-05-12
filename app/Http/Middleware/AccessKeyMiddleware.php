<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $key = $request->header('accessKey');
        if (!$key || $key !== env('ACCESS_KEY')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}
