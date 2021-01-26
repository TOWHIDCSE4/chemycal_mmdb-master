<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        $userId = session('admin_user_id');

        if (empty($userId)) {
            return redirect('admin/login');
        } else {
            return $next($request);
        }
    }
}
