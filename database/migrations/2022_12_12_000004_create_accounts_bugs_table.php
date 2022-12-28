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
        Schema::create('accounts_bugs', function (Blueprint $table) {
            $table->comment('');
            $table->id();
            $table->uuid('account_id')->nullable()->index('idx_acc_bug_acc');
            $table->uuid('bug_id')->nullable()->index('idx_acc_bug_bug');

            $table->index(['account_id', 'bug_id'], 'idx_account_bug');
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
        Schema::dropIfExists('accounts_bugs');
    }
};
