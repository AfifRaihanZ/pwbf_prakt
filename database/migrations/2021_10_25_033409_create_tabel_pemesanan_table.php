<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pesan');
            $table->string('status_pesan', 25);
            $table->timestamps();
        });

        Schema::table('tabel_pemesanan', function (Blueprint $table) {
            $table->foreignId('id_sup')->constrained('tabel_supplier');
            $table->foreignId('id_user')->constrained('tabel_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_pemesanan');
    }
}
