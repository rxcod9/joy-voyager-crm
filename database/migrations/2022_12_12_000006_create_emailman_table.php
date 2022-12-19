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
        Schema::create('emailman', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('user_id')->nullable();
            $table->integer('id', true);
            $table->uuid('campaign_id')->nullable()->index('idx_eman_campaign_id');
            $table->uuid('marketing_id')->nullable();
            $table->uuid('list_id')->nullable();
            $table->dateTime('send_date_time')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->boolean('in_queue')->nullable()->default(false);
            $table->dateTime('in_queue_date')->nullable();
            $table->integer('send_attempts')->nullable()->default(0);
            $table->uuid('related_id')->nullable();
            $table->string('related_type', 100)->nullable();
            $table->boolean('related_confirm_opt_in')->nullable()->default(false);

            $table->index(['list_id', 'user_id', 'deleted_at'], 'idx_eman_list');
            $table->index(['related_id', 'related_type', 'campaign_id'], 'idx_eman_relid_reltype_id');
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
        Schema::dropIfExists('emailman');
    }
};
