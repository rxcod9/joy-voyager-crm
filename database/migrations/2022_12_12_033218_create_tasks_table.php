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
        Schema::create('tasks', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name', 50)->nullable()->index('idx_tsk_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable()->index('idx_task_assigned');
            $table->string('status', 100)->nullable()->default('Not Started')->index('idx_task_status');
            $table->boolean('date_due_flag')->nullable()->default(false);
            $table->dateTime('date_due')->nullable();
            $table->boolean('date_start_flag')->nullable()->default(false);
            $table->dateTime('date_start')->nullable();
            $table->string('parent_type')->nullable();
            $table->uuid('parent_id')->nullable();
            $table->uuid('contact_id')->nullable();
            $table->string('priority', 100)->nullable();

            $table->index(['contact_id', 'deleted_at'], 'idx_task_con_del');
            $table->index(['parent_id', 'parent_type', 'deleted_at'], 'idx_task_par_del');
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
        Schema::dropIfExists('tasks');
    }
};
