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
        Schema::create('documents', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->string('document_name')->nullable();
            $table->string('doc_id', 100)->nullable();
            $table->string('doc_type', 100)->nullable()->default('Sugar');
            $table->string('doc_url')->nullable();
            $table->date('active_date')->nullable();
            $table->date('exp_date')->nullable();
            $table->string('category_id', 100)->nullable();
            $table->string('subcategory_id', 100)->nullable();
            $table->string('status_id', 100)->nullable();
            $table->uuid('document_revision_id')->nullable();
            $table->uuid('related_doc_id')->nullable();
            $table->uuid('related_doc_rev_id')->nullable();
            $table->boolean('is_template')->nullable()->default(false);
            $table->string('template_type', 100)->nullable();

            $table->index(['category_id', 'subcategory_id'], 'idx_doc_cat');
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
        Schema::dropIfExists('documents');
    }
};
