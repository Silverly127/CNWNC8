<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('idSP');
            $table->string('tenSP');
            $table->string('idDM')->index();
            $table->bigInteger('giaSP');
            $table->mediumInteger('giamSP');
            $table->string('anhSP');
            $table->Integer('statusSP');
            $table->dateTime('ngaySP');
            $table->dateTime('capnhatSP');
            $table->text('ndSP');
            $table->string('ngayphathanh');
            $table->string('nph');
            $table->string('npt');
            $table->string('windows');
            $table->string('macos');
            $table->string('videoSP');
            $table->string('anhthemSP');
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
