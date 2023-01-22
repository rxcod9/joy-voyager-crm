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
        Schema::create('reminders', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable()->index('idx_reminder_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            // $table->boolean('deleted')->nullable()->default(false)->index('idx_reminder_deleted');
            $table->uuid('assigned_to_id')->nullable();
            $table->boolean('popup')->nullable();
            $table->boolean('email')->nullable();
            $table->boolean('email_sent')->nullable();
            $table->string('timer_popup', 32)->nullable();
            $table->string('timer_email', 32)->nullable();
            $table->string('related_event_module', 32)->nullable()->index('idx_reminder_related_event_module');
            $table->uuid('related_event_module_id')->nullable()->index('idx_reminder_related_event_module_id');
            $table->integer('date_willexecute')->nullable()->default(-1);
            $table->boolean('popup_viewed')->nullable()->default(false);
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
        Schema::dropIfExists('reminders');
    }
};
