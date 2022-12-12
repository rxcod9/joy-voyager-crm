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
        Schema::create('schedulers', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('created_by_id')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->string('name')->nullable();
            $table->string('job')->nullable();
            $table->dateTime('date_time_start')->nullable();
            $table->dateTime('date_time_end')->nullable();
            $table->string('job_interval', 100)->nullable();
            $table->time('time_from')->nullable();
            $table->time('time_to')->nullable();
            $table->dateTime('last_run')->nullable();
            $table->string('status', 100)->nullable();
            $table->boolean('catch_up')->nullable()->default(true);

            $table->index(['date_time_start', 'deleted_at'], 'idx_schedule');
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
        Schema::dropIfExists('schedulers');
    }
};
