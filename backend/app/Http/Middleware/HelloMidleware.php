<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMidleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return Closure
     */
    public function handle(Request $request, Closure $next)
    {
        $data = [
            ['name' => 'rika', 'mail' => 'rika@gmail.com'],
            ['name' => 'humika', 'mail' => 'humika@gmail.com'],
            ['name' => 'yuno', 'mail' => 'yuno@gmail.com']
        ];
        $request->merge(['data' => $data]);
        return $next($request);
    }
}
