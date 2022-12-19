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
        Schema::create('fields_meta_data', function (Blueprint $table) {
            $table->comment('');
            $table->string('id')->primary();
            $table->string('name')->nullable();
            $table->string('vname')->nullable();
            $table->string('comments')->nullable();
            $table->string('help')->nullable();
            $table->string('custom_module')->nullable();
            $table->string('type')->nullable();
            $table->integer('len')->nullable();
            $table->boolean('required')->nullable()->default(false);
            $table->string('default_value')->nullable();
            $table->boolean('audited')->nullable()->default(false);
            $table->boolean('massupdate')->nullable()->default(false);
            $table->smallInteger('duplicate_merge')->nullable()->default(0);
            $table->boolean('reportable')->nullable()->default(true);
            $table->string('importable')->nullable();
            $table->string('ext1')->nullable();
            $table->string('ext2')->nullable();
            $table->string('ext3')->nullable();
            $table->text('ext4')->nullable();

            $table->index(['custom_module', 'deleted_at'], 'idx_meta_cm_del');
            $table->index(['id', 'deleted_at'], 'idx_meta_id_del');
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
        Schema::dropIfExists('fields_meta_data');
    }
};
