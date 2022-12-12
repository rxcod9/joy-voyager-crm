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
        Schema::create('calls_users', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('call_id')->nullable()->index('idx_usr_call_call');
            $table->uuid('user_id')->nullable()->index('idx_usr_call_usr');
            $table->string('required', 1)->nullable()->default('1');
            $table->string('accept_status', 25)->nullable()->default('none');

            $table->index(['call_id', 'user_id'], 'idx_call_users');
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
        Schema::dropIfExists('calls_users');
    }
};
