<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelDetailPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_detail_pemesanan', function (Blueprint $table) {
            $table->integer('jumlah_up');
            $table->integer('harga_up');
            $table->timestamps();
        });

        Schema::table('tabel_detail_pemesanan', function (Blueprint $table) {
            $table->foreignId('id_bar')->constrained('tabel_barang');
            $table->foreignId('id_pesan')->constrained('tabel_pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_detail_pemesanan');
    }
}
