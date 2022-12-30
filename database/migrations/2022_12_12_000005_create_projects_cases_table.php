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
        Schema::create('projects_cases', function (Blueprint $table) {
            $table->comment('');
            $table->id();
            $table->uuid('case_id')->nullable()->index('idx_proj_case_case');
            $table->uuid('project_id')->nullable()->index('idx_proj_case_proj');

            $table->index(['project_id', 'case_id'], 'projects_cases_alt');
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
        Schema::dropIfExists('projects_cases');
    }
};
