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
        Schema::create('calls_contacts', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('call_id')->nullable()->index('idx_con_call_call');
            $table->uuid('contact_id')->nullable()->index('idx_con_call_con');
            $table->string('required', 1)->nullable()->default('1');
            $table->string('accept_status', 25)->nullable()->default('none');

            $table->index(['call_id', 'contact_id'], 'idx_call_contact');
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
        Schema::dropIfExists('calls_contacts');
    }
};
