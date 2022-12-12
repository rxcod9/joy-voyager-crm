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
        Schema::create('fp_events_leads_1_c', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('fp_events_leads_1fp_events_ida')->nullable();
            $table->uuid('fp_events_leads_1leads_idb')->nullable();
            $table->string('invite_status', 25)->nullable()->default('Not Invited');
            $table->string('accept_status', 25)->nullable()->default('No Response');
            $table->integer('email_responded')->nullable()->default(0);

            $table->index(['fp_events_leads_1fp_events_ida', 'fp_events_leads_1leads_idb'], 'fp_events_leads_1_alt');
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
        Schema::dropIfExists('fp_events_leads_1_c');
    }
};
