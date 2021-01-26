<?php
/**
 * Created by PhpStorm.
 * User: MinhVu
 * Date: 10/4/2019
 * Time: 2:26 PM
 */

namespace App\Core\Config;


class AppConst
{
    public static $LOGIN_ADMIN = 0;
    public static $LOGIN_CUS = 1;
    public static $LOGIN_PAR = 2;

    public static $ERROR_CODE_TOKEN_EMPTY =4;
    public static $ERROR_CODE_TOKEN_INVALID = 5;
    public static $ERROR_PERMISSION_INVALID = 6;
}