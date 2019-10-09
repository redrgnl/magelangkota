<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbGrafik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_grafik', function (Blueprint $table) {
            $table->Increments('idGrafik');
            $table->Integer('idSektor');
            // $table->Integer('idDetailbidang');
            $table->char('metabaseId');
            $table->char('judulGrafik');
            $table->dateTime('waktuDibuat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_grafik');
    }
}
