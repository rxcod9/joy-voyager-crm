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
        Schema::create('acl_roles_actions', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('role_id')->nullable()->index('idx_acl_role_id');
            $table->uuid('action_id')->nullable()->index('idx_acl_action_id');
            $table->integer('access_override')->nullable();

            $table->index(['role_id', 'action_id'], 'idx_aclrole_action');
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
        Schema::dropIfExists('acl_roles_actions');
    }
};
