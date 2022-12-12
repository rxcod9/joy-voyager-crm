<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aow_processed_aow_actions', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('aow_processed_id')->nullable();
            $table->uuid('aow_action_id')->nullable();
            $table->uuid('status')->nullable()->default('Pending');

            $table->index(['aow_action_id', 'deleted_at', 'aow_processed_id'], 'idx_actid_del_freid');
            $table->index(['aow_processed_id', 'aow_action_id'], 'idx_aow_processed_aow_actions');
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
        Schema::dropIfExists('aow_processed_aow_actions');
    }
};
