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
        Schema::create('emails_email_addr_rel', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('email_id');
            $table->string('address_type', 4)->nullable();
            $table->uuid('email_address_id')->index('idx_eearl_address_id');

            $table->index(['email_id', 'address_type'], 'idx_eearl_email_id');
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
        Schema::dropIfExists('emails_email_addr_rel');
    }
};
