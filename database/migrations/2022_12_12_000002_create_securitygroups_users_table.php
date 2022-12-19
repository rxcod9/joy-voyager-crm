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
        Schema::create('securitygroups_users', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('securitygroup_id')->nullable()->index('securitygroups_users_idxa');
            $table->uuid('user_id')->nullable()->index('securitygroups_users_idxb');
            $table->boolean('primary_group')->nullable();
            $table->boolean('noninheritable')->nullable()->default(false);

            $table->index(['user_id', 'deleted_at', 'securitygroup_id', 'id'], 'securitygroups_users_idxc');
            $table->index(['user_id', 'deleted_at', 'securitygroup_id'], 'securitygroups_users_idxd');
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
        Schema::dropIfExists('securitygroups_users');
    }
};
