<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelKotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_kota', function (Blueprint $table) {
            $table->id();
            $table->string('kota', 50);
            $table->timestamps();
        });

        Schema::table('tabel_kota', function (Blueprint $table) {
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
        Schema::dropIfExists('tabel_kota');
    }
}
