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
        Schema::create('documents_contacts', function (Blueprint $table) {
            $table->comment('');
            $table->id();
            $table->uuid('document_id')->nullable();
            $table->uuid('contact_id')->nullable();

            $table->index(['contact_id', 'document_id'], 'documents_contacts_contact_id');
            $table->index(['document_id', 'contact_id'], 'documents_contacts_document_id');
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
        Schema::dropIfExists('documents_contacts');
    }
};
