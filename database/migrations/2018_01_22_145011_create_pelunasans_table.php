<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelunasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelunasan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_transaksi')->unsigned();
            $table->foreign('id_transaksi')->references('id')->on('transaksi_modal')->onDelete('restrict');
            $table->string('id_usaha');
            $table->foreign('id_usaha')->references('id')->on('usaha')->onDelete('restrict');
            $table->string('id_investor');
            $table->foreign('id_investor')->references('id')->on('investor')->onDelete('restrict');
            $table->string('id_admin_recieve')->nullable();
            $table->foreign('id_admin_recieve')->references('id')->on('admin')->onDelete('restrict');
            $table->string('id_admin_transfer')->nullable();
            $table->foreign('id_admin_transfer')->references('id')->on('admin')->onDelete('restrict');
            $table->integer('modal');
            $table->integer('uang_pengembalian');
            $table->string('url_foto_transfer_pengusaha');
            $table->string('url_foto_transfer_admin');
            $table->integer('verified')->unsigned();
            $table->foreign('verified')->references('id')->on('verified_pelunasan')->onDelete('restrict');
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
        Schema::dropIfExists('pelunasan');
    }
}
