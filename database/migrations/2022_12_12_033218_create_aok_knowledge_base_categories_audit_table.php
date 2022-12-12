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
        Schema::create('aok_knowledge_base_categories_audit', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('parent_id')->index('idx_aok_knowledge_base_categories_parent_id');
            $table->uuid('created_by_id')->nullable();
            $table->string('field_name', 100)->nullable();
            $table->string('data_type', 100)->nullable();
            $table->string('before_value_string')->nullable();
            $table->string('after_value_string')->nullable();
            $table->text('before_value_text')->nullable();
            $table->text('after_value_text')->nullable();
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
        Schema::dropIfExists('aok_knowledge_base_categories_audit');
    }
};
