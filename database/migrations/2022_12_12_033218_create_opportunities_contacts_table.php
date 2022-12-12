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
        Schema::create('opportunities_contacts', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('contact_id')->nullable()->index('idx_con_opp_con');
            $table->uuid('opportunity_id')->nullable()->index('idx_con_opp_opp');
            $table->string('contact_role', 50)->nullable();

            $table->index(['opportunity_id', 'contact_id'], 'idx_opportunities_contacts');
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
        Schema::dropIfExists('opportunities_contacts');
    }
};
