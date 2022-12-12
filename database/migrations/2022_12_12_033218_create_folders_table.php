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
        Schema::create('folders', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->string('folder_type', 25)->nullable();
            $table->uuid('parent_folder')->nullable()->index('idx_parent_folder');
            $table->boolean('has_child')->nullable()->default(false);
            $table->boolean('is_group')->nullable()->default(false);
            $table->boolean('is_dynamic')->nullable()->default(false);
            $table->text('dynamic_query')->nullable();
            $table->uuid('assign_to_id')->nullable();
            $table->uuid('created_by_id');
            $table->uuid('modified_by');
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
        Schema::dropIfExists('folders');
    }
};
