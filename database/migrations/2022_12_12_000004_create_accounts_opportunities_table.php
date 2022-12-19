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
        Schema::create('accounts_opportunities', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('opportunity_id')->nullable();
            $table->uuid('account_id')->nullable();

            $table->index(['account_id', 'opportunity_id'], 'idx_account_opportunity');
            $table->index(['opportunity_id', 'deleted_at', 'account_id'], 'idx_oppid_del_accid');
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
        Schema::dropIfExists('accounts_opportunities');
    }
};
