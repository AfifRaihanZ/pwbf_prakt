<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_role', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_role', 30);
            $table->timestamps();
        });
        
        Schema::table('tabel_role', function (Blueprint $table){
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
        Schema::dropIfExists('tabel_role');
    }
}
