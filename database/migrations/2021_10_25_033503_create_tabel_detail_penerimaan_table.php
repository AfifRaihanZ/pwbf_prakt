<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelDetailPenerimaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_detail_penerimaan', function (Blueprint $table) {
            $table->id();
            $table->integer('harga_his');
            $table->integer('jumlah_his');
            $table->integer('subtotal');
            $table->timestamps();
        });

        Schema::table('tabel_detail_penerimaan', function (Blueprint $table) {
            $table->foreignId('id_terima')->constrained('tabel_penerimaan');
            $table->foreignId('id_bar')->constrained('tabel_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_detail_penerimaan');
    }
}
