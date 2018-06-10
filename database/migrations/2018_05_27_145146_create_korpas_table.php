<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKorpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korpa_proizvodi', function (Blueprint $table) {
            $table->integer('korpa_id')->unsigned();
            $table->integer('proizvod_id')->unsigned();
            $table->integer('kolicina')->unsigned();
            $table->timestamps();
            $table->foreign('proizvod_id')->references('id')->on('proizvodi');
            $table->foreign('korpa_id')->references('id')->on('korpe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('korpa_proizvodi');
    }
}
