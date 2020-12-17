<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('binhluan', function (Blueprint $table) {
            $table->bigIncrements('idBL');
            $table->unsignedBigInteger('idUS')->index();
            $table->unsignedBigInteger('idSP')->index();
            $table->string('comment');
            $table->Integer('statusBL');
            $table->dateTime('ngayBL');
            $table->dateTime('capnhatBL');
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
