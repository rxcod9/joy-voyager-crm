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
        Schema::create('outbound_email', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->string('type', 15)->nullable()->default('user');
            $table->uuid('user_id');
            $table->string('smtp_from_name')->nullable();
            $table->string('smtp_from_addr')->nullable();
            $table->string('mail_sendtype', 8)->nullable()->default('smtp');
            $table->string('mail_smtptype', 20)->nullable()->default('other');
            $table->string('mail_smtpserver', 100)->nullable();
            $table->string('mail_smtpport', 5)->nullable()->default('0');
            $table->string('mail_smtpuser', 100)->nullable();
            $table->string('mail_smtppass', 100)->nullable();
            $table->boolean('mail_smtpauth_req')->nullable()->default(false);
            $table->string('mail_smtpssl', 1)->nullable()->default('0');
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->uuid('assigned_user_id')->nullable();
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
        Schema::dropIfExists('outbound_email');
    }
};
