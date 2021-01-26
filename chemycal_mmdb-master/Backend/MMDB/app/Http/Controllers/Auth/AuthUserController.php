<?php
/**
 * Created by PhpStorm.
 * User: MinhVu
 * Date: 10/7/2019
 * Time: 10:21 AM
 */

namespace App\Http\Controllers\Auth;


use App\Core\Business\Auth\AuthBusiness;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    public function loginUser(Request $request) {
        $business = new AuthBusiness();
        return $business->loginUser($request, true);
    }

    public function logout(Request $request) {
        $business = new AuthBusiness();
        return $business->logout($request);
    }
}