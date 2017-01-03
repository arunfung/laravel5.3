<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('role_id')->default(0)->comment('用户角色');
            $table->string('name')->comment('用户名');
            $table->string('email',50)->unique()->comment('用户邮箱');
            $table->timestamp('last_login')->nullable()->comment('最后登陆时间');
            $table->string('last_ip',20)->comment('最后登陆IP');
            $table->string('last_address')->comment('最后登陆地址');
            $table->string('last_device')->comment('最后登陆设备');
            $table->string('last_platform')->comment('最后登陆系统版本');
            $table->string('last_browser')->comment('最后登陆浏览器版本');
            $table->integer('logins')->default(1)->comment('登陆次数');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
}
