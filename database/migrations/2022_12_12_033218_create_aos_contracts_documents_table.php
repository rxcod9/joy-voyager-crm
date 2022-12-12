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
        Schema::create('aos_contracts_documents', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('aos_contracts_id')->nullable();
            $table->uuid('documents_id')->nullable();
            $table->uuid('document_revision_id')->nullable();

            $table->index(['aos_contracts_id', 'documents_id'], 'aos_contracts_documents_alt');
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
        Schema::dropIfExists('aos_contracts_documents');
    }
};
