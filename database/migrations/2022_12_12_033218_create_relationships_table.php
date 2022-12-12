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
        Schema::create('relationships', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('relationship_name', 150)->nullable()->index('idx_rel_name');
            $table->string('lhs_module', 100)->nullable();
            $table->string('lhs_table', 64)->nullable();
            $table->string('lhs_key', 64)->nullable();
            $table->string('rhs_module', 100)->nullable();
            $table->string('rhs_table', 64)->nullable();
            $table->string('rhs_key', 64)->nullable();
            $table->string('join_table', 64)->nullable();
            $table->string('join_key_lhs', 64)->nullable();
            $table->string('join_key_rhs', 64)->nullable();
            $table->string('relationship_type', 64)->nullable();
            $table->string('relationship_role_column', 64)->nullable();
            $table->string('relationship_role_column_value', 50)->nullable();
            $table->boolean('reverse')->nullable()->default(false);
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
        Schema::dropIfExists('relationships');
    }
};
