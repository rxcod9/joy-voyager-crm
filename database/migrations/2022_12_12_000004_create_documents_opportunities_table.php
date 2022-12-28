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
        Schema::create('documents_opportunities', function (Blueprint $table) {
            $table->comment('');
            $table->id();
            $table->uuid('document_id')->nullable();
            $table->uuid('opportunity_id')->nullable();

            $table->index(['document_id', 'opportunity_id'], 'idx_docu_oppo_docu_id');
            $table->index(['opportunity_id', 'document_id'], 'idx_docu_opps_oppo_id');
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
        Schema::dropIfExists('documents_opportunities');
    }
};
