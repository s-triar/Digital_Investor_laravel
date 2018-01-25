<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKewenangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kewenangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->integer('level')->nullable();
            $table->timestamps();
        });
        DB::table('kewenangan')->insert(
            [
                [
                    'nama' => 'CEO',
                    'keterangan' => 'Semua fitur bisa diakses'
                ],
                [
                    'nama' => 'Terima dan Transfer Modal',
                    'keterangan' => 'Hanya bisa CRUD transaksi_modal dan income'
                ],
                [
                    'nama' => 'Terima dan Transfer pelunasan',
                    'keterangan' => 'Hanya bisa CRUD pelunasan'
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kewenangan');
    }
}
