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
        Schema::create('emails', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable()->index('idx_email_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->boolean('orphaned')->nullable();
            $table->dateTime('last_synced')->nullable();
            $table->dateTime('date_sent_received')->nullable();
            $table->string('message_id')->nullable()->index('idx_message_id');
            $table->string('type', 100)->nullable();
            $table->string('status', 100)->nullable();
            $table->boolean('flagged')->nullable();
            $table->boolean('reply_to_status')->nullable();
            $table->string('intent', 100)->nullable()->default('pick');
            $table->uuid('mailbox_id')->nullable();
            $table->string('parent_type', 100)->nullable();
            $table->uuid('parent_id')->nullable()->index('idx_email_parent_id');
            $table->string('uid')->nullable()->index('idx_email_uid');
            $table->string('category_id', 100)->nullable()->index('idx_email_cat');

            $table->index(['assigned_user_id', 'type', 'status'], 'idx_email_assigned');
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
        Schema::dropIfExists('emails');
    }
};
