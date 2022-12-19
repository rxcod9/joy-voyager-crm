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
        Schema::create('aow_processed', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('aow_workflow_id')->nullable()->index('aow_processed_index_workflow_id');
            $table->uuid('parent_id')->nullable();
            $table->string('parent_type', 100)->nullable();
            $table->string('status', 100)->nullable()->default('Pending')->index('aow_processed_index_status');

            $table->index(['aow_workflow_id', 'status', 'parent_id', 'deleted_at'], 'aow_processed_index_workflow');
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
        Schema::dropIfExists('aow_processed');
    }
};
