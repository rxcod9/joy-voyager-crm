<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_feeds', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('user_id')->nullable();
            $table->uuid('feed_id')->nullable();
            $table->integer('rank')->nullable();

            $table->index(['user_id', 'feed_id'], 'idx_ud_user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_feeds');
    }
};
