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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable()->index('idx_campaign_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->uuid('assigned_to_id')->nullable();
            $table->integer('tracker_key')->index('camp_auto_tracker_key');
            $table->integer('tracker_count')->nullable()->default(0);
            $table->string('refer_url')->nullable()->default('http://');
            $table->string('tracker_text')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('status', 100)->nullable();
            $table->integer('impressions')->nullable()->default(0);
            $table->uuid('currency_id')->nullable();
            $table->double('budget')->nullable();
            $table->double('expected_cost')->nullable();
            $table->double('actual_cost')->nullable();
            $table->double('expected_revenue')->nullable();
            $table->string('campaign_type', 100)->nullable();
            $table->text('objective')->nullable();
            $table->text('content')->nullable();
            $table->string('frequency', 100)->nullable();
            $table->uuid('survey_id')->nullable()->index('idx_survey_id');
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
        Schema::dropIfExists('campaigns');
    }
};
