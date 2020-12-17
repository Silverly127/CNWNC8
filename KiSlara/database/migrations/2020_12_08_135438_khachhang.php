<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Khachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->bigIncrements('idUS');
            $table->string('tenUS');
            $table->string('tkUS');
            $table->string('mkUS');
            $table->string('emailUS');
            $table->string('sdtUS');
            $table->string('anhUS');
            $table->Integer('statusUS');
            $table->dateTime('ngayUS');
            $table->dateTime('capnhatUS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
