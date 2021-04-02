<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborators', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('playlist_id');
            $table->integer('friend_id');
            $table->boolean('approved')->default(0);
            $table->timestamps();
            $table->unique(['user_id', 'playlist_id', 'friend_id'], 'unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborators');
    }
}
