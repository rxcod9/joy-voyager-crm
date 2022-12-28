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
        Schema::create('aok_knowledgebase_categories', function (Blueprint $table) {
            $table->comment('');
            $table->id();
            $table->uuid('aok_knowledgebase_id')->nullable();
            $table->uuid('aok_knowledgebase_base_categories_id')->nullable();

            $table->index(['aok_knowledgebase_id', 'aok_knowledgebase_base_categories_id'], 'aok_knowledgebase_categories_alt');
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
        Schema::dropIfExists('aok_knowledgebase_categories');
    }
};
