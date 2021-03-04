<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicIllustratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_illustrator', function (Blueprint $table) {

            $table->unsignedBigInteger('comic_id');
            $table->unsignedBigInteger('illustrator_id');

            $table->foreign('comic_id')->references('id')->on('comics');
            $table->foreign('illustrator_id')->references('id')->on('illustrators');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_illustrator');
    }
}
