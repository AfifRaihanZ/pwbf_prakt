<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_bayar');
            $table->integer('total_bayar');
            $table->timestamps();
        });

        Schema::table('tabel_pembayaran', function (Blueprint $table) {
            $table->foreignId('id_trima')->constrained('tabel_penerimaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_pembayaran');
    }
}
