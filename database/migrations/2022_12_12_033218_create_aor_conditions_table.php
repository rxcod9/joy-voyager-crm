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
        Schema::create('aor_conditions', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('aor_report_id')->nullable()->index('aor_conditions_index_report_id');
            $table->integer('condition_order')->nullable();
            $table->string('logic_op')->nullable();
            $table->string('parenthesis')->nullable();
            $table->longText('module_path')->nullable();
            $table->string('field', 100)->nullable();
            $table->string('operator', 100)->nullable();
            $table->string('value_type', 100)->nullable();
            $table->string('value')->nullable();
            $table->boolean('parameter')->nullable();
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
        Schema::dropIfExists('aor_conditions');
    }
};
