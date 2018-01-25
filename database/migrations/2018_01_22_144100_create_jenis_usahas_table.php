<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_usaha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->string('url_foto')->nullable();
            $table->timestamps();
        });
        DB::table('jenis_usaha')->insert(
            [
            [
                'nama' => 'Peternakan',
                'keterangan' => 'Segala jenis kebutuhan usaha yang di butuhkan untuk meminta modal di bidang peternakan.',
                'url_foto' => '/img/peternakan.png'
            ],
            [
                'nama' => 'Perikanan',
                'keterangan' => 'Segala jenis kebutuhan usaha yang di butuhkan untuk meminta modal di bidang perikanan.',
                'url_foto' => '/img/perikanan.png'
            ],
            [
                'nama' => 'Pertanian',
                'keterangan' => 'Segala jenis kebutuhan usaha yang di butuhkan untuk meminta modal di bidang pertanian.',
                'url_foto' => '/img/pertanian.png'
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
        Schema::dropIfExists('jenis_usaha');
    }
}
