<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->integer('user_id')->index('user_id');
            $table->integer('activityable_id')->nullable()->index('activityable_id');
            $table->string('activityable_type', 50)->nullable();
            $table->string('events', 200);
            $table->string('action', 20)->index('action');
            $table->boolean('allow_comments')->default(1);
            $table->mediumInteger('comment_count')->default(0);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->index(['user_id', 'activityable_type', 'action'], 'COLLAPSE_QUERY_INDEX');
            $table->index(['activityable_id', 'activityable_type'], 'INDEX_FOR_DELETE');

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
