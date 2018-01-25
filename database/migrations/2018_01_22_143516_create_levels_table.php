<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
        DB::table('level')->insert(
            [
            [
                'nama' => 'Pengusaha',
                'keterangan' => 'Pengusaha dapat membuat usaha yang nantinya mendapat modal dari investor'
            ],
            [
                'nama' => 'Investor',
                'keterangan' => 'Investor melakukan investasi terhadap usaha yang dipilih dan akan mendapatkan keuntungan'
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
        Schema::dropIfExists('level');
    }
}
