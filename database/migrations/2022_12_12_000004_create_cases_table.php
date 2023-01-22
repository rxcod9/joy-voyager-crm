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
        Schema::create('cases', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable()->index('idx_case_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_to_id')->nullable();
            $table->integer('case_number')->index('case_number');
            $table->string('type')->nullable();
            $table->string('status', 100)->nullable();
            $table->string('priority', 100)->nullable();
            $table->text('resolution')->nullable();
            $table->text('work_log')->nullable();
            $table->uuid('account_id')->nullable()->index('idx_account_id');
            $table->string('state', 100)->nullable()->default('Open');
            $table->uuid('contact_created_by_id')->nullable();

            $table->unique(['case_number'], 'casesnumk');
            $table->index(['assigned_to_id', 'status', 'deleted_at'], 'idx_cases_stat_del');
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
        Schema::dropIfExists('cases');
    }
};
