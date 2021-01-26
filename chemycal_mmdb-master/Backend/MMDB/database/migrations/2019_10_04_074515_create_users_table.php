<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable()->comment('email của khách hàng');
            $table->string('password')->nullable()->comment('mật khẩu đang nhập của khách hàng');
            $table->string('name')->nullable()->comment('tên người dùng ');
            $table->text('avatar')->nullable()->comment('avatar ');
            $table->integer('role')->nullable()->comment('loai role 0 : admin , 1 : nguoi dung');
            $table->string('token')->nullable()->comment('chữ ký số được dùng để xác thực người dùng');
            $table->integer('is_block')->nullable()->comment('loai is_block 0 : hoat dong , 1 : bi khoa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
