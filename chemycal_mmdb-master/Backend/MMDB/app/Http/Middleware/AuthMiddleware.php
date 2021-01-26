<?php

namespace App\Http\Middleware;

use App\Core\Config\AppConst;
use App\Core\Utility\CommonUtility;
use App\Models\Users;
use Closure;

class AuthMiddleware
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
        $token = $request->header('token');

        if (empty($token)) {
            return CommonUtility::getErrorResponseErrorCode(AppConst::$ERROR_CODE_TOKEN_EMPTY, __("Token empty"));
        }

        $user = Users::where(["token" => $token])->first();

        if (empty($user)) {
            return CommonUtility::getErrorResponseErrorCode(AppConst::$ERROR_CODE_TOKEN_INVALID, __("Token invalid"));
        }

        $request->attributes->add(["user" => $user]);

        return $next($request);
    }
}
