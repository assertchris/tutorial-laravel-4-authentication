<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokenTable
  extends Migration
{
  public function up()
  {
    Schema::create("token", function (Blueprint $table) {
      $table->string("email")->index();
      $table->string("token")->index();
      $table->timestamp("created_at");
    });
  }

  public function down()
  {
    Schema::drop("token");
  }
}
