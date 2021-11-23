<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelHistoryStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_history_stock', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_hs');
            $table->integer('update_history_hs');
            $table->string('status_hs', 30);
            $table->timestamps();
        });

        Schema::table('tabel_history_stock', function (Blueprint $table) {
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
        Schema::dropIfExists('tabel_history_stock');
    }
}
