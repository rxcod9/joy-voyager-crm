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
        Schema::create('inbound_email_autoreply', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('autoreplied_to', 100)->nullable()->index('idx_ie_autoreplied_to');
            $table->uuid('ie_id');
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
        Schema::dropIfExists('inbound_email_autoreply');
    }
};
