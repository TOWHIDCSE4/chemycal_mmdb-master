<?php
/**
 * Created by PhpStorm.
 * User: MinhVu
 * Date: 10/4/2019
 * Time: 2:54 PM
 */

namespace App\Core\Business\Auth;


use App\Core\Config\AppConst;
use App\Core\Utility\CommonUtility;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AuthBusiness
{
    public function loginAdmin(Request $request, $isRequestFromWeb){
        $email = $request ->input("email");
        $password = $request ->input("password");
        $role = $request->input("role"); // 0: Admin, 1: User
        if (empty($email)) {
            return CommonUtility::getErrorResponse("Email cannot be empty");
        }
        if (empty($password)) {
            return CommonUtility::getErrorResponse("Password cannot be empty");
        }
        $user = Users::where([
            "email" => $email,"role" => $role
        ])->first();
        if (empty($user)) {
            return CommonUtility::getErrorResponse("User doesn't exist");
        }
        if (Hash::check($password, $user->password)) {
            $token = Hash::make($user->id . Str::random(32));
            $user->token = $token;
            $user->save();

            $data = [
                "user_id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
                "token" => $token
            ];

            if ($isRequestFromWeb) {
                $this->saveSession(0, $user->id, $user->role);
            }

            return CommonUtility::getSuccessResponse($data, "Login Success");
        } else {
            return CommonUtility::getErrorResponse("Email or password is incorrect");
        }
    }
    public function saveSession($kind, $userId, $role) {
        $prefix = "";
        if ($kind == 0) { // Admin
            $prefix = "admin";
        } else if ($kind == 1) { // User
            $prefix = "user";
        } else if ($kind == 2) { // Provider
            $prefix = "provider";
        }

        session([$prefix . '_user_id' => $userId]);
        session([$prefix . '_user_role' => $role]);
    }
    public function loginUser(Request $request, $isRequestFromWeb){
        $email = $request ->input("email");
        $password = $request ->input("password");
        if (empty($email)) {
            return CommonUtility::getErrorResponse("Email cannot be empty");
        }
        if (empty($password)) {
            return CommonUtility::getErrorResponse("Password cannot be empty");
        }
        $user = Users::where([
            "email" => $email,"role" => AppConst::$LOGIN_CUS
        ])->first();
        if (empty($user)) {
            return CommonUtility::getErrorResponse("User doesn't exist");
        }
        $userBlock = Users::where([
            "email" => $email,"role" => AppConst::$LOGIN_CUS, "is_block"=>1
        ])->first();
        if (!empty($userBlock)) {
            return CommonUtility::getErrorResponse("Your account is blocked");
        }
        if (Hash::check($password, $user->password)) {
            $token = Hash::make($user->id . Str::random(32));
            $user->token = $token;
            $user->save();

            $data = [
                "user_id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
                "token" => $token
            ];

            if ($isRequestFromWeb) {
                $this->saveSession(1, $user->id, $user->role);
            }

            return CommonUtility::getSuccessResponse($data, "Login Success");
        } else {
            return CommonUtility::getErrorResponse("Email or password is incorrect");
        }
    }

    public function logout($request) {
        $kind = $request->input("kind"); // 0: Admin, 1: User, 2: Provider
        $this->removeSession($kind);
        return CommonUtility::getSuccessResponse([], "Logout Success");
    }

    public function removeSession($kind) {
        $prefix = "";
        if ($kind == 0) { // Admin
            $prefix = "admin";
        } else if ($kind == 1) { // User
            $prefix = "user";
        } else if ($kind == 2) { // Provider
            $prefix = "provider";
        }

        session()->forget($prefix .'_user_id');
        session()->forget($prefix .'_user_role');
        session()->flush();
    }
}