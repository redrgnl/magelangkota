<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDetailbidang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detailbidang', function (Blueprint $table) {
            $table->Increments('idDetailbidang');
            $table->Integer('idBidang');
            $table->Integer('idGrafik');
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
        Schema::dropIfExists('tb_detailbidang');
    }
}
