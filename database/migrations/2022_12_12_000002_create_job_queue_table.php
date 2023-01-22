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
        Schema::create('job_queue', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('assigned_to_id')->nullable();
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('scheduler_id')->nullable();
            $table->dateTime('execute_time')->nullable();
            $table->string('status', 20)->nullable();
            $table->string('resolution', 20)->nullable();
            $table->text('message')->nullable();
            $table->string('target')->nullable();
            $table->text('data')->nullable();
            $table->boolean('requeue')->nullable()->default(false);
            $table->tinyInteger('retry_count')->nullable();
            $table->tinyInteger('failure_count')->nullable();
            $table->integer('job_delay')->nullable();
            $table->string('client')->nullable();
            $table->integer('percent_complete')->nullable();

            $table->index(['status', 'created_at'], 'idx_status_entered');
            $table->index(['status', 'updated_at'], 'idx_status_modified');
            $table->index(['status', 'scheduler_id'], 'idx_status_scheduler');
            $table->index(['status', 'execute_time', 'created_at'], 'idx_status_time');
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
        Schema::dropIfExists('job_queue');
    }
};
