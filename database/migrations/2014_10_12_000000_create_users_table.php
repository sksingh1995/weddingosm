<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 15)->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('token')->nullable()->comment('for password reset and other things');
            $table->char('referral_code', 30)->nullable()->comment('when a vendor user signs up, a referral code generates and vendor user can refer other user to sign up');
            $table->enum('user_type', ['customer', 'vendor'])->default('customer')->comment('there are two types of user in the website');
            $table->boolean('active')->default(0)->comment('0 -> no, 1 -> yes');
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
