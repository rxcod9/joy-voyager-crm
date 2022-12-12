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
        Schema::create('accounts_contacts', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('contact_id')->nullable();
            $table->uuid('account_id')->nullable();

            $table->index(['account_id', 'contact_id'], 'idx_account_contact');
            $table->index(['contact_id', 'deleted_at', 'account_id'], 'idx_contid_del_accid');
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
        Schema::dropIfExists('accounts_contacts');
    }
};
