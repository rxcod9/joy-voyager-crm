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
        Schema::create('acl_actions', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->string('name', 150)->nullable();
            $table->string('category', 100)->nullable();
            $table->string('acltype', 100)->nullable();
            $table->integer('aclaccess')->nullable();
            

            $table->index(['id', 'deleted_at'], 'idx_aclaction_id_del');
            $table->index(['category', 'name'], 'idx_category_name');
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
        Schema::dropIfExists('acl_actions');
    }
};
