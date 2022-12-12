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
        Schema::create('meetings_leads', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('meeting_id')->nullable()->index('idx_lead_meeting_meeting');
            $table->uuid('lead_id')->nullable()->index('idx_lead_meeting_lead');
            $table->string('required', 1)->nullable()->default('1');
            $table->string('accept_status', 25)->nullable()->default('none');

            $table->index(['meeting_id', 'lead_id'], 'idx_meeting_lead');
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
        Schema::dropIfExists('meetings_leads');
    }
};
