<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOauthSocialiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oauth_socialite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('provider_id', 50)->nullable();
            $table->string('provider_name')->nullable();
            $table->string('provider_email')->nullable();
            $table->string('provider_artwork');
            $table->string('service', 50)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at');
            $table->unique(['user_id', 'provider_id', 'service'], 'UNIQUE_SERVICE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oauth_socialite');
    }
}
