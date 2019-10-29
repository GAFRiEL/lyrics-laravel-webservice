<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('lyrics');
            $table->bigInteger('album_id')->unsigned()->index();
            $table->bigInteger('genre_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('album_id')->references('id')->on('albums')->cascade('ON DELETE')->cascade('ON UPDATE');
            $table->foreign('genre_id')->references('id')->on('genres')->cascade('ON DELETE')->cascade('ON UPDATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
