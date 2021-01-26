<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId = session('user_user_id');

        if (empty($userId)) {
            return redirect('/login');
        } else {
            return $next($request);
        }
    }
}
