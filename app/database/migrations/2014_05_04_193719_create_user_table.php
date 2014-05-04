<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable
  extends Migration
{
  public function up()
  {
    Schema::create("user", function (Blueprint $table) {
      $table->increments("id");
      $table->string("username");
      $table->string("password");
      $table->string("email");
      $table->string("remember_token")->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists("user");
  }
}
