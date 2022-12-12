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
        Schema::create('projects_opportunities', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('opportunity_id')->nullable()->index('idx_proj_opp_opp');
            $table->uuid('project_id')->nullable()->index('idx_proj_opp_proj');

            $table->index(['project_id', 'opportunity_id'], 'projects_opportunities_alt');
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
        Schema::dropIfExists('projects_opportunities');
    }
};
