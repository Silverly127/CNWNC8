<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mathe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mathe', function (Blueprint $table) {
            $table->string('idC')->primary();
            $table->unsignedBigInteger('idSP')->index();
            $table->string('idHD')->index();
            $table->string('code');
            $table->Integer('statusC');
            $table->dateTime('ngayC');
            $table->dateTime('capnhatC');
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
