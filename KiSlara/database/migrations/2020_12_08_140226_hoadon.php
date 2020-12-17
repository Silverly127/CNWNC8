<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->string('idHD')->primary();
            $table->unsignedBigInteger('idUS')->index();
            $table->Integer('statusHD');
            $table->dateTime('ngayHD');
            $table->dateTime('capnhatHD');
            $table->string('loaiHD');
            $table->string('duyetHD');
            $table->dateTime('ngayduyet');
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
