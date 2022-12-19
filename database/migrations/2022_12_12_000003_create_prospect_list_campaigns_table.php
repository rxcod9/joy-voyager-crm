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
        Schema::create('prospect_list_campaigns', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('prospect_list_id')->nullable()->index('idx_pro_id');
            $table->uuid('campaign_id')->nullable()->index('idx_cam_id');

            $table->index(['prospect_list_id', 'campaign_id'], 'idx_prospect_list_campaigns');
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
        Schema::dropIfExists('prospect_list_campaigns');
    }
};
