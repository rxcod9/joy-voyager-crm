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
        Schema::create('tracker', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->uuid('monitor_id')->index('idx_tracker_monitor_id');
            $table->uuid('user_id')->nullable();
            $table->string('module_name')->nullable();
            $table->uuid('item_id')->nullable()->index('idx_tracker_iid');
            $table->string('item_summary')->nullable();
            // $table->dateTime('updated_at')->nullable()->index('idx_tracker_updated_at');
            $table->string('action')->nullable();
            $table->uuid('session_id')->nullable();
            $table->boolean('visible')->nullable()->default(false);

            $table->index(['user_id', 'item_id', 'visible'], 'idx_tracker_userid_itemid_vis');
            $table->index(['user_id', 'visible', 'id'], 'idx_tracker_userid_vis_id');
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
        Schema::dropIfExists('tracker');
    }
};
