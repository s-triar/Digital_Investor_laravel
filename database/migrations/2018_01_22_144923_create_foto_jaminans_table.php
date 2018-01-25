<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoJaminansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_jaminan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jaminan')->unsigned();
            $table->foreign('id_jaminan')->references('id')->on('jaminan')->onDelete('restrict');
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
        Schema::dropIfExists('foto_jaminan');
    }
}
