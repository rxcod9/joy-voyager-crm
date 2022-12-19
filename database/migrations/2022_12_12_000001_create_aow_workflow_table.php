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
        Schema::create('aow_workflow', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->string('flow_module', 100)->nullable();
            $table->string('flow_run_on', 100)->nullable()->default('0');
            $table->string('status', 100)->nullable()->default('Active')->index('aow_workflow_index_status');
            $table->string('run_when', 100)->nullable()->default('Always');
            $table->boolean('multiple_runs')->nullable()->default(false);
            $table->boolean('run_on_import')->nullable()->default(false);
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
        Schema::dropIfExists('aow_workflow');
    }
};
