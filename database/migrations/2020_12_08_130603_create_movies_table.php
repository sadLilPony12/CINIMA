<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('poster')->nullable();
            $table->string('title');
            $table->string('director');
            $table->integer('running_time');            
            $table->string('trailer_url');            
            $table->string('status')->nullable();
            $table->date('showing_at')->nullable();
            $table->date('ending_at')->nullable();
            $table->string('producers');
            $table->string('starring');
            $table->string('screenplay_by');
            $table->string('story_by');
            $table->string('distributed_by');
            $table->string('production_company')->nullable();
            $table->double('ticket_price');
            $table->string('release_date')->nullable();
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->string('language');
            $table->string('edited_by');
            $table->string('music_by');
            $table->string('cinematography');
            $table->longtext('synopsis');
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
