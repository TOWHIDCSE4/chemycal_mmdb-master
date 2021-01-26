<?php
/**
 * Created by PhpStorm.
 * User: MinhVu
 * Date: 10/4/2019
 * Time: 2:52 PM
 */

namespace App\Http\Controllers\Auth;
use App\Core\Business\Auth\AuthBusiness;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthAdminController extends Controller
{
    public function loginAdmin(Request $request) {
        $business = new AuthBusiness();
        return $business->loginAdmin($request, true);
    }

    public function logout(Request $request) {
        $business = new AuthBusiness();
        return $business->logout($request);
    }

}