<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account')->unique();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->text('address')->nullable();
            $table->string('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('password');
            $table->tinyInteger('status');
            $table->tinyInteger('account_type');
            $table->bigInteger('company_id');
            $table->timestamps();
            $table->rememberToken();
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
