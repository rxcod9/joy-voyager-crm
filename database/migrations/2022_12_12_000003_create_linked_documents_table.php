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
        Schema::create('linked_documents', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('parent_id')->nullable();
            $table->string('parent_type', 25)->nullable();
            $table->uuid('document_id')->nullable();
            $table->uuid('document_revision_id')->nullable();

            $table->index(['parent_type', 'parent_id', 'document_id'], 'idx_parent_document');
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
        Schema::dropIfExists('linked_documents');
    }
};
