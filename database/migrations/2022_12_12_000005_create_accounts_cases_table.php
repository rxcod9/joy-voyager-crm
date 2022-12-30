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
        Schema::create('accounts_cases', function (Blueprint $table) {
            $table->comment('');
            $table->id();
            $table->uuid('account_id')->nullable()->index('idx_acc_case_acc');
            $table->uuid('case_id')->nullable()->index('idx_acc_acc_case');
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
        Schema::dropIfExists('accounts_cases');
    }
};
