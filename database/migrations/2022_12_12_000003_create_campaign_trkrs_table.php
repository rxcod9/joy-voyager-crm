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
        Schema::create('campaign_trkrs', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('tracker_name')->nullable();
            $table->string('tracker_url')->nullable()->default('http://');
            $table->integer('tracker_key')->index('campaign_tracker_key_idx');
            $table->uuid('campaign_id')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->boolean('is_optout')->nullable()->default(false);
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
        Schema::dropIfExists('campaign_trkrs');
    }
};
