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
        Schema::create('prospect_lists_prospects', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('prospect_list_id')->nullable();
            $table->uuid('related_id')->nullable();
            $table->string('related_type', 25)->nullable();

            $table->index(['prospect_list_id', 'deleted_at'], 'idx_plp_pro_id');
            $table->index(['related_id', 'related_type', 'prospect_list_id'], 'idx_plp_rel_id');
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
        Schema::dropIfExists('prospect_lists_prospects');
    }
};
