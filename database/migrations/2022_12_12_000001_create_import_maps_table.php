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
        Schema::create('import_maps', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name', 254)->nullable();
            $table->uuid('source')->nullable();
            $table->string('enclosure', 1)->nullable()->default(' ');
            $table->string('delimiter', 1)->nullable()->default(',');
            $table->uuid('module')->nullable();
            $table->text('content')->nullable();
            $table->text('default_values')->nullable();
            $table->boolean('has_header')->nullable()->default(true);
            
            $table->uuid('assigned_user_id')->nullable();
            $table->string('is_published', 3)->nullable()->default('no');

            $table->index(['assigned_user_id', 'module', 'name', 'deleted_at'], 'idx_owner_module_name');
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
        Schema::dropIfExists('import_maps');
    }
};
