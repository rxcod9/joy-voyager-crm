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
        Schema::create('am_tasktemplates', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->string('status', 100)->nullable()->default('Not Started');
            $table->string('priority', 100)->nullable()->default('High');
            $table->integer('percent_complete')->nullable()->default(0);
            $table->integer('predecessors')->nullable();
            $table->boolean('milestone_flag')->nullable()->default(false);
            $table->string('relationship_type', 100)->nullable()->default('FS');
            $table->integer('task_number')->nullable();
            $table->integer('order_number')->nullable();
            $table->integer('estimated_effort')->nullable();
            $table->string('utilization', 100)->nullable()->default('0');
            $table->integer('duration')->nullable();
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
        Schema::dropIfExists('am_tasktemplates');
    }
};
