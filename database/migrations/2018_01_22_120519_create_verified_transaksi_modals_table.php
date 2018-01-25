<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerifiedTransaksiModalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verified_transaksi_modal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
        DB::table('verified_transaksi_modal')->insert(
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
                    'nama' => 'Transfer modal investor telah diterima admin',
                    'keterangan' => 'Admin telah menerima transfer modal ke usaha dan jumlah tranfer cocok dengan bukti transfer'
                ],
                [
                    'nama' => 'Admin telah transfer modal',
                    'keterangan' => 'Admin telah transfer modal ke usaha dan jumlah tranfer (modal - 3%*modal) '
                ],
                [
                    'nama' => 'Tranfer modal telah terbayarkan',
                    'keterangan' => 'Pengusaha telah melunasi tranfer bayar ini'
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
        Schema::dropIfExists('verified_transaksi_modal');
    }
}
