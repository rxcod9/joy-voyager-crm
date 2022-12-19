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
        Schema::create('bugs', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable()->index('idx_bug_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable()->index('idx_bugs_assigned_user');
            $table->integer('bug_number')->index('bug_number');
            $table->string('type')->nullable();
            $table->string('status', 100)->nullable();
            $table->string('priority', 100)->nullable();
            $table->string('resolution')->nullable();
            $table->text('work_log')->nullable();
            $table->string('found_in_release')->nullable();
            $table->string('fixed_in_release')->nullable();
            $table->string('source')->nullable();
            $table->string('product_category')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['bug_number'], 'bugsnumk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bugs');
    }
};
