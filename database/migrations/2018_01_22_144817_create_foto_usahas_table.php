<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_usaha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_usaha');
            $table->foreign('id_usaha')->references('id')->on('usaha')->onDelete('restrict');
            $table->string('url_foto');
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
        Schema::dropIfExists('foto_usaha');
    }
}
