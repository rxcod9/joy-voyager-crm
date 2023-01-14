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
        Schema::create('securitygroups_audit', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('parent_id')->index('idx_securitygroups_parent_id');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->string('field_name', 100)->nullable();
            $table->string('data_type', 100)->nullable();
            $table->string('request', 100)->nullable();
            $table->string('before_value_string')->nullable();
            $table->string('after_value_string')->nullable();
            $table->text('before_value_text')->nullable();
            $table->text('after_value_text')->nullable();
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
        Schema::dropIfExists('securitygroups_audit');
    }
};
