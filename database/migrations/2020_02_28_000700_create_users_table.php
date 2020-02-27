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
            $table->bigIncrements('id');
            $table->string('name', 128);
            $table->string('email', 128)->unique();
            $table->string('phone_number', 32)->unique();
            $table->string('password', 128);
            $table->string('email_varification_token')->nullable();
            $table->tinyInteger('email_verified')->default(0);
            $table->string('facebook_id', 128)->nullable();
            $table->string('google_id', 128)->nullable();
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
