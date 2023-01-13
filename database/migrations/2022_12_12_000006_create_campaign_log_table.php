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
        Schema::create('campaign_log', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('campaign_id')->nullable()->index('idx_camp_campaign_id');
            $table->uuid('target_tracker_key')->nullable()->index('idx_camp_tracker');
            $table->string('target_type', 100)->nullable();
            $table->uuid('target_id')->nullable()->index('idx_target_id')->comment('[leads prospects contacts accounts]');
            $table->string('activity_type', 100)->nullable();
            $table->dateTime('activity_date')->nullable();
            $table->string('related_type', 100)->nullable();
            $table->uuid('related_id')->nullable()->comment('[contacts emails leads opportunities]');
            $table->boolean('archived')->nullable()->default(false);
            $table->integer('hits')->nullable()->default(0);
            $table->uuid('list_id')->nullable();

            $table->string('more_information', 100)->nullable()->index('idx_camp_more_info');
            $table->uuid('marketing_id')->nullable();

            $table->index(['target_id', 'deleted_at'], 'idx_target_id_deleted');
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
        Schema::dropIfExists('campaign_log');
    }
};
