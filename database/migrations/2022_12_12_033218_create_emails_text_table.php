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
        Schema::create('emails_text', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('email_id')->primary();
            $table->string('from_addr', 250)->nullable()->index('emails_textfromaddr');
            $table->string('reply_to_addr', 250)->nullable();
            $table->text('to_addrs')->nullable();
            $table->text('cc_addrs')->nullable();
            $table->text('bcc_addrs')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_html')->nullable();
            $table->longText('raw_source')->nullable();
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
        Schema::dropIfExists('emails_text');
    }
};
