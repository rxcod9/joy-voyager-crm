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
        Schema::create('documents_accounts', function (Blueprint $table) {
            $table->comment('');
            $table->id();
            $table->uuid('document_id')->nullable();
            $table->uuid('account_id')->nullable();

            $table->index(['account_id', 'document_id'], 'documents_accounts_account_id');
            $table->index(['document_id', 'account_id'], 'documents_accounts_document_id');
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
        Schema::dropIfExists('documents_accounts');
    }
};
