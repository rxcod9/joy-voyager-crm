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
        Schema::create('aor_fields', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('aor_report_id')->nullable()->index('aor_fields_index_report_id');
            $table->integer('field_order')->nullable();
            $table->longText('module_path')->nullable();
            $table->string('field', 100)->nullable();
            $table->boolean('display')->nullable();
            $table->boolean('link')->nullable();
            $table->string('label')->nullable();
            $table->string('field_function', 100)->nullable();
            $table->string('sort_by', 100)->nullable();
            $table->string('format', 100)->nullable();
            $table->string('total', 100)->nullable();
            $table->string('sort_order', 100)->nullable();
            $table->boolean('group_by')->nullable();
            $table->string('group_order', 100)->nullable();
            $table->integer('group_display')->nullable();
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
        Schema::dropIfExists('aor_fields');
    }
};
