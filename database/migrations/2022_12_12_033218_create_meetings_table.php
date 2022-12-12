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
        Schema::create('meetings', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name', 50)->nullable()->index('idx_mtg_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->string('location', 50)->nullable();
            $table->string('password', 50)->nullable();
            $table->string('join_url', 200)->nullable();
            $table->string('host_url', 400)->nullable();
            $table->string('displayed_url', 400)->nullable();
            $table->string('creator', 50)->nullable();
            $table->string('external_id', 50)->nullable();
            $table->integer('duration_hours')->nullable();
            $table->integer('duration_minutes')->nullable();
            $table->dateTime('date_start')->nullable()->index('idx_meet_date_start');
            $table->dateTime('date_end')->nullable();
            $table->string('parent_type', 100)->nullable();
            $table->string('status', 100)->nullable()->default('Planned');
            $table->string('type')->nullable()->default('Sugar');
            $table->uuid('parent_id')->nullable();
            $table->integer('reminder_time')->nullable()->default(-1);
            $table->integer('email_reminder_time')->nullable()->default(-1);
            $table->boolean('email_reminder_sent')->nullable()->default(false);
            $table->string('outlook_id')->nullable();
            $table->integer('sequence')->nullable()->default(0);
            $table->uuid('repeat_type')->nullable();
            $table->integer('repeat_interval')->nullable()->default(1);
            $table->string('repeat_dow', 7)->nullable();
            $table->date('repeat_until')->nullable();
            $table->integer('repeat_count')->nullable();
            $table->uuid('repeat_parent_id')->nullable();
            $table->uuid('recurring_source')->nullable();
            $table->string('gsync_id', 1024)->nullable();
            $table->integer('gsync_lastsync')->nullable();

            $table->index(['parent_id', 'parent_type', 'deleted_at'], 'idx_meet_par_del');
            $table->index(['assigned_user_id', 'status', 'deleted_at'], 'idx_meet_stat_del');
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
        Schema::dropIfExists('meetings');
    }
};
