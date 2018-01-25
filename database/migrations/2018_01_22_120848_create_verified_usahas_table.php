<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerifiedUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verified_usaha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
        DB::table('verified_usaha')->insert(
           
            [
                ['nama' => 'Jaminan belum mencukupi kebutuhan modal',
                'keterangan' => 'Pastikan bahwa besar jaminan lebih besar daripada modal'],
                ['nama' => 'Jaminan telah mencukupi modal',
                'keterangan' => 'Usaha ini lolos verifikasi jaminan']
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
        Schema::dropIfExists('verified_usaha');
    }
}
