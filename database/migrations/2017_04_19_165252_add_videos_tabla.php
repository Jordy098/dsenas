<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVideosTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url',200);
            $table->integer('palabra_id')->unsigned();
            $table->integer('region_id')->unsigned();
            $table->integer('estado_id')->unsigned();

            $table->foreign('palabra_id')->references('id')->on('palabras');
            $table->foreign('region_id')->references('id')->on('regiones');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
