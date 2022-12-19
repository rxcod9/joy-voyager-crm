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
        Schema::create('inbound_email', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->string('name')->nullable();
            $table->string('status', 100)->nullable()->default('Active');
            $table->string('server_url', 100)->nullable();
            $table->string('email_user', 100)->nullable();
            $table->string('email_password', 100)->nullable();
            $table->integer('port')->nullable();
            $table->string('service', 50)->nullable();
            $table->text('mailbox')->nullable();
            $table->boolean('delete_seen')->nullable()->default(false);
            $table->string('mailbox_type', 10)->nullable();
            $table->uuid('template_id')->nullable();
            $table->text('stored_options')->nullable();
            $table->uuid('group_id')->nullable();
            $table->boolean('is_personal')->nullable()->default(false);
            $table->uuid('groupfolder_id')->nullable();
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
        Schema::dropIfExists('inbound_email');
    }
};
