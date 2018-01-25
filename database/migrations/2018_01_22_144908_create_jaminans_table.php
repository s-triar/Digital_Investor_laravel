<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJaminansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaminan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_usaha');
            $table->foreign('id_usaha')->references('id')->on('usaha')->onDelete('restrict');
            $table->string('id_admin')->nullable();
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('restrict');
            $table->integer('id_jenis_jaminan')->unsigned();
            $table->foreign('id_jenis_jaminan')->references('id')->on('jenis_jaminan')->onDelete('restrict');
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->integer('harga_estimasi')->nullable(); 
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
        Schema::dropIfExists('jaminan');
    }
}
