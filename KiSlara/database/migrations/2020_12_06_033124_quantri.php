<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quantri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantri', function (Blueprint $table) {
            $table->string('idAD')->primary();
            $table->string('tkAD');
            $table->string('mkAD');
            $table->string('tenAD');
            $table->string('anhAD');
            $table->Integer('quyenAD');
            $table->dateTime('ngayAD');
            $table->dateTime('capnhatAD');
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
