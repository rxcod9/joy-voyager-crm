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
        Schema::create('projects_accounts', function (Blueprint $table) {
            $table->comment('');
            $table->id();
            $table->uuid('account_id')->nullable()->index('idx_proj_acct_acct');
            $table->uuid('project_id')->nullable()->index('idx_proj_acct_proj');

            $table->index(['project_id', 'account_id'], 'projects_accounts_alt');
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
        Schema::dropIfExists('projects_accounts');
    }
};
