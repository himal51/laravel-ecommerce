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
            $table->id();
            $table->string('name', 128);
            $table->string('email', 128);
            $table->string('phone_number', 128);
            $table->string('password', 128); 
            $table->bigInteger('reward_points')->default(0);
            $table->date('email_verified_at')->nullable();
            $table->string('email_verification_token', 80)->nullable();
            $table->string('facebook_id', 80)->nullable();
            $table->string('google_id', 80)->nullable();
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
        Schema::dropIfExists('users');
    }
}
