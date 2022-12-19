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
        Schema::create('saved_search', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name', 150)->nullable();
            $table->string('search_module', 150)->nullable();
            
            $table->uuid('assigned_user_id')->nullable();
            $table->text('contents')->nullable();
            $table->text('description')->nullable();

            $table->index(['name', 'deleted_at'], 'idx_desc');
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
        Schema::dropIfExists('saved_search');
    }
};
