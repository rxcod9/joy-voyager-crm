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
        Schema::create('email_cache', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('ie_id')->nullable()->index('idx_ie_id');
            $table->string('mbox', 60)->nullable();
            $table->string('subject')->nullable()->index('idx_mail_subj');
            $table->string('fromaddr', 100)->nullable();
            $table->string('toaddr')->nullable()->index('idx_mail_to');
            $table->dateTime('senddate')->nullable();
            $table->string('message_id')->nullable();
            $table->unsignedInteger('mailsize')->nullable();
            $table->unsignedInteger('imap_uid')->nullable();
            $table->unsignedInteger('msgno')->nullable();
            $table->tinyInteger('recent')->nullable();
            $table->tinyInteger('flagged')->nullable();
            $table->tinyInteger('answered')->nullable();
            $table->tinyInteger('seen')->nullable();
            $table->tinyInteger('draft')->nullable();

            $table->index(['ie_id', 'mbox', 'senddate'], 'idx_mail_date');
            $table->index(['ie_id', 'mbox', 'fromaddr'], 'idx_mail_from');
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
        Schema::dropIfExists('email_cache');
    }
};
