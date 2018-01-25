<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kewenangan')->unsigned();
            $table->foreign('id_kewenangan')->references('id')->on('kewenangan')->onDelete('restrict');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('token_register')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_admin');
    }
}
