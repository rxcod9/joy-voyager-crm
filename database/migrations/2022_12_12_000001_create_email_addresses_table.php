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
        Schema::create('email_addresses', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('email_address')->nullable();
            $table->string('email_address_caps')->nullable();
            $table->boolean('invalid_email')->nullable()->default(false);
            $table->boolean('opt_out')->nullable()->default(false);
            $table->string('confirm_opt_in')->nullable()->default('not-opt-in');
            $table->dateTime('confirm_opt_in_date')->nullable();
            $table->dateTime('confirm_opt_in_sent_date')->nullable();
            $table->dateTime('confirm_opt_in_fail_date')->nullable();
            $table->string('confirm_opt_in_token')->nullable();

            $table->index(['email_address_caps', 'opt_out', 'invalid_email'], 'idx_ea_caps_opt_out_invalid');
            $table->index(['email_address', 'opt_out', 'invalid_email'], 'idx_ea_opt_out_invalid');
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
        Schema::dropIfExists('email_addresses');
    }
};
