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
        Schema::create('email_marketing', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->boolean('deleted')->nullable()->index('idx_emmkit_del');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->string('name')->nullable()->index('idx_emmkt_name');
            $table->string('from_name', 100)->nullable();
            $table->string('from_addr', 100)->nullable();
            $table->string('reply_to_name', 100)->nullable();
            $table->string('reply_to_addr', 100)->nullable();
            $table->uuid('inbound_email_id')->nullable();
            $table->dateTime('date_start')->nullable();
            $table->uuid('template_id');
            $table->string('status', 100)->nullable();
            $table->uuid('campaign_id')->nullable();
            $table->uuid('outbound_email_id')->nullable();
            $table->boolean('all_prospect_lists')->nullable()->default(false);
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
        Schema::dropIfExists('email_marketing');
    }
};
