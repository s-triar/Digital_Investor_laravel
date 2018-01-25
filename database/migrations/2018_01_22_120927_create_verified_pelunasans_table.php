<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerifiedPelunasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verified_pelunasan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
        DB::table('verified_pelunasan')->insert(
            [
                [
                    'nama' => 'Admin belum menerima transfer',
                    'keterangan' => 'Pastikan anda telah mentransfer dengan jumlah yang pas dan sertakan bukti transfernya.'
                ],
                [
                    'nama' => 'Admin telah menerima transfer namun tidak cocok dengan jumlah transfer',
                    'keterangan' => 'Admin telah menerima transfer modal ke usaha tapi jumlah tranfer cocok dengan bukti transfer. Harap transfer kekurangan jumlah lagi. Dan foto bersama bukti transfer sebelumnya.'
                ],
                [
                    'nama' => 'Transfer modal pengusaha telah diterima admin',
                    'keterangan' => 'Admin telah menerima transfer modal ke investor dan jumlah tranfer cocok dengan bukti transfer'
                ],
                [
                    'nama' => 'Admin telah transfer modal',
                    'keterangan' => 'Admin telah transfer modal ke investor dan jumlah tranfer (modal - 3%*modal) '
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
        Schema::dropIfExists('verified_pelunasan');
    }
}
