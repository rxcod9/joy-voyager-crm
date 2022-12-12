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
        Schema::create('opportunities', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name', 50)->nullable()->index('idx_opp_name');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable()->index('idx_opp_assigned');
            $table->string('opportunity_type')->nullable();
            $table->uuid('campaign_id')->nullable();
            $table->string('lead_source', 50)->nullable();
            $table->double('amount')->nullable();
            $table->double('amount_usdollar')->nullable();
            $table->uuid('currency_id')->nullable();
            $table->date('date_closed')->nullable();
            $table->string('next_step', 100)->nullable();
            $table->string('sales_stage')->nullable();
            $table->double('probability')->nullable();

            $table->index(['id', 'deleted_at'], 'idx_opp_id_deleted');
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
        Schema::dropIfExists('opportunities');
    }
};
