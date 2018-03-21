<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id')->unsigned(); // kh
            $table->string('title');
            $table->string('description');
            $table->string('short_descript');
            $table->string('picture')->nullable($value = true);
            $table->integer('tip_id')->unsigned();  // kh
            $table->integer('level_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('rating_id')->unsigned();
            $table->integer('emoji_id')->unsigned();
            // $table->integer('user_id')->nullable($value = true); // kh
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('rating_id')->references('id')->on('ratings');
            $table->foreign('emoji_id')->references('id')->on('emojis');
            $table->foreign('tip_id')->references('id')->on('tips');    // kh
            // $table->foreign('user_id')->references('id')->on('users');  // kh
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
