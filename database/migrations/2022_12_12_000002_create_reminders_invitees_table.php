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
        Schema::create('reminders_invitees', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable()->index('idx_reminder_invitee_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_to_id')->nullable()->index('idx_reminder_invitee_assigned_to_id');
            $table->uuid('reminder_id')->index('idx_reminder_invitee_reminder_id');
            $table->string('related_invitee_module', 32)->nullable()->index('idx_reminder_invitee_related_invitee_module');
            $table->uuid('related_invitee_module_id')->index('idx_reminder_invitee_related_invitee_module_id');
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
        Schema::dropIfExists('reminders_invitees');
    }
};
