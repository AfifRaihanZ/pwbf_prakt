<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bar', 50);
            $table->integer('stock_bar');
            $table->integer('harga_beli_bar');
            $table->integer('harga_jual_bar');
            $table->timestamps();
        });

        Schema::table('tabel_barang', function (Blueprint $table) {
            $table->foreignId('id_jb')->constrained('tabel_jenis_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_barang');
    }
}
