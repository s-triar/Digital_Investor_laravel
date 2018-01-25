<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->primary('id');
            $table->integer('id_auth')->unsigned();
            $table->foreign('id_auth')->references('id')->on('auth')->onDelete('restrict');
            $table->string('id_admin')->nullable();
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('restrict');
            $table->string('nik', 14)->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('url_foto_ktp');
            $table->string('url_foto');
            $table->boolean('verified');
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
        Schema::drop('investor');
    }
}
