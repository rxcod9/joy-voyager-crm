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
        Schema::create('prospect_lists', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('assigned_to_id')->nullable();
            $table->uuid('id')->primary();
            $table->string('name')->nullable()->index('idx_prospect_list_name');
            $table->string('list_type', 100)->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            
            $table->text('description')->nullable();
            $table->string('domain_name')->nullable();
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
        Schema::dropIfExists('prospect_lists');
    }
};
