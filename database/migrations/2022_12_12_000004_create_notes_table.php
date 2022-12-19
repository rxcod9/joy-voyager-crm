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
        Schema::create('notes', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('assigned_user_id')->nullable();
            $table->uuid('id')->primary();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->string('name')->nullable()->index('idx_note_name');
            $table->string('file_mime_type', 100)->nullable();
            $table->string('filename')->nullable();
            $table->string('parent_type')->nullable();
            $table->uuid('parent_id')->nullable();
            $table->uuid('contact_id')->nullable()->index('idx_note_contact');
            $table->boolean('portal_flag')->nullable();
            $table->boolean('embed_flag')->nullable()->default(false);
            $table->text('description')->nullable();

            $table->index(['deleted_at', 'assigned_user_id'], 'idx_notes_assigned_del');
            $table->index(['parent_id', 'parent_type'], 'idx_notes_parent');
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
        Schema::dropIfExists('notes');
    }
};
