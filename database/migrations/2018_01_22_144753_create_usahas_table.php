<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usaha', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->primary('id');
            $table->string('id_pengusaha');
            $table->foreign('id_pengusaha')->references('id')->on('pengusaha')->onDelete('restrict');
            $table->string('nama');
            $table->integer('jenis')->unsigned();
            $table->foreign('jenis')->references('id')->on('jenis_usaha')->onDelete('restrict');
            $table->string('alamat');
            $table->string('keterangan');
            $table->integer('modal');
            $table->boolean('isFinal');
            $table->integer('verified')->unsigned();
            $table->foreign('verified')->references('id')->on('verified_usaha')->onDelete('restrict');
            $table->date('jatuh_tempo')->nullable();
            $table->boolean('closed');
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
        Schema::dropIfExists('usaha');
    }
}
