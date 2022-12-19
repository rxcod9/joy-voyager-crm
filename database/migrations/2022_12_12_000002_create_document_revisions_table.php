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
        Schema::create('document_revisions', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('change_log')->nullable();
            $table->uuid('document_id')->nullable();
            $table->string('doc_id', 100)->nullable();
            $table->string('doc_type', 100)->nullable();
            $table->string('doc_url')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->string('filename')->nullable();
            $table->string('file_ext', 100)->nullable();
            $table->string('file_mime_type', 100)->nullable()->index('documentrevision_mimetype');
            $table->string('revision', 100)->nullable();
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
        Schema::dropIfExists('document_revisions');
    }
};
