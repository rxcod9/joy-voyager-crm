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
        Schema::create('securitygroups_records', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('securitygroup_id')->nullable();
            $table->uuid('record_id')->nullable();
            $table->string('module')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();

            $table->index(['deleted_at', 'record_id', 'module', 'securitygroup_id'], 'idx_securitygroups_records_del');
            $table->index(['module', 'deleted_at', 'record_id', 'securitygroup_id'], 'idx_securitygroups_records_mod');
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
        Schema::dropIfExists('securitygroups_records');
    }
};
