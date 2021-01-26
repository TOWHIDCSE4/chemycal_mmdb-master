<?php
/**
 * Created by PhpStorm.
 * User: MinhVu
 * Date: 10/22/2019
 * Time: 10:39 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password',"role", "is_block","avatar"
    ];
}