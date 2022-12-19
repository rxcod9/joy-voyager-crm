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
        Schema::create('calls', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name', 50)->nullable()->index('idx_call_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->integer('duration_hours')->nullable();
            $table->integer('duration_minutes')->nullable();
            $table->dateTime('date_start')->nullable()->index('idx_calls_date_start');
            $table->dateTime('date_end')->nullable();
            $table->string('parent_type')->nullable();
            $table->string('status', 100)->nullable()->default('Planned')->index('idx_status');
            $table->string('direction', 100)->nullable();
            $table->uuid('parent_id')->nullable()->comment('opportunities, cases, leads, project, aos_contracts, prospects, bugs, project_task, accounts');
            $table->integer('reminder_time')->nullable()->default(-1);
            $table->integer('email_reminder_time')->nullable()->default(-1);
            $table->boolean('email_reminder_sent')->nullable()->default(false);
            $table->string('outlook_id')->nullable();
            $table->uuid('repeat_type')->nullable();
            $table->integer('repeat_interval')->nullable()->default(1);
            $table->string('repeat_dow', 7)->nullable();
            $table->date('repeat_until')->nullable();
            $table->integer('repeat_count')->nullable();
            $table->uuid('repeat_parent_id')->nullable();
            $table->uuid('recurring_source')->nullable();

            $table->index(['deleted_at', 'assigned_user_id'], 'idx_calls_assigned_del');
            $table->index(['parent_id', 'parent_type', 'deleted_at'], 'idx_calls_par_del');
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
        Schema::dropIfExists('calls');
    }
};
