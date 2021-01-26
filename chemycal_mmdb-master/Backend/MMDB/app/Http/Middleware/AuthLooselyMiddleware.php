<?php

namespace App\Http\Middleware;

use App\Core\Utility\CommonUtility;
use App\Models\Users;
use Closure;

class AuthLooselyMiddleware
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
        $token = $request->token;
        $user = null;

        if (!empty($token)) {
            $user = Users::where(["token" => $token])->first();
        }

        $request->attributes->add(["user" => $user]);

        return $next($request);
    }
}
