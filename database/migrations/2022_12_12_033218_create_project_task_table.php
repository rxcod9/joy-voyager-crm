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
        Schema::create('project_task', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('project_id');
            $table->integer('project_task_id')->nullable();
            $table->string('name', 50)->nullable();
            $table->string('status')->nullable();
            $table->string('relationship_type')->nullable();
            $table->text('description')->nullable();
            $table->text('predecessors')->nullable();
            $table->date('date_start')->nullable();
            $table->integer('time_start')->nullable();
            $table->integer('time_finish')->nullable();
            $table->date('date_finish')->nullable();
            $table->integer('duration')->nullable();
            $table->text('duration_unit')->nullable();
            $table->integer('actual_duration')->nullable();
            $table->integer('percent_complete')->nullable();
            $table->date('date_due')->nullable();
            $table->time('time_due')->nullable();
            $table->integer('parent_task_id')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->string('priority')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->boolean('milestone_flag')->nullable();
            $table->integer('order_number')->nullable()->default(1);
            $table->integer('task_number')->nullable();
            $table->integer('estimated_effort')->nullable();
            $table->integer('actual_effort')->nullable();
            $table->integer('utilization')->nullable()->default(100);
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
        Schema::dropIfExists('project_task');
    }
};
