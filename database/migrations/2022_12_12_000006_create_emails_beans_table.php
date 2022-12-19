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
        Schema::create('emails_beans', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('email_id')->nullable();
            $table->uuid('bean_id')->nullable()->index('idx_emails_beans_bean_id');
            $table->string('bean_module', 100)->nullable();
            $table->text('campaign_data')->nullable();

            $table->index(['email_id', 'bean_id', 'deleted_at'], 'idx_emails_beans_email_bean');
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
        Schema::dropIfExists('emails_beans');
    }
};
