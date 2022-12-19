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
        Schema::create('aos_pdf_templates', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->longText('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->boolean('active')->nullable()->default(true);
            $table->string('type', 100)->nullable();
            $table->longText('pdfheader')->nullable();
            $table->longText('pdffooter')->nullable();
            $table->integer('margin_left')->nullable()->default(15);
            $table->integer('margin_right')->nullable()->default(15);
            $table->integer('margin_top')->nullable()->default(16);
            $table->integer('margin_bottom')->nullable()->default(16);
            $table->integer('margin_header')->nullable()->default(9);
            $table->integer('margin_footer')->nullable()->default(9);
            $table->string('page_size', 100)->nullable();
            $table->string('orientation', 100)->nullable();
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
        Schema::dropIfExists('aos_pdf_templates');
    }
};
