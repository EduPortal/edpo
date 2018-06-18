<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobbies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('hobbies')->nullable();
            $table->text('favourite_tv_shows')->nullable();
            $table->text('favourite_movies')->nullable();
            $table->text('favourite_games')->nullable();
            $table->text('favourite_artists')->nullable();
            $table->text('favourite_books')->nullable();
            $table->text('favourite_writers')->nullable();
            $table->text('favourite_interests')->nullable();
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
        Schema::dropIfExists('hobbies');
    }
}
