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
        Schema::create('prospects', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable()->index('idx_prospects_assigned');
            $table->string('salutation')->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('photo')->nullable();
            $table->string('department')->nullable();
            $table->boolean('do_not_call')->nullable()->default(false);
            $table->string('phone_home', 100)->nullable();
            $table->string('phone_mobile', 100)->nullable();
            $table->string('phone_work', 100)->nullable();
            $table->string('phone_other', 100)->nullable();
            $table->string('phone_fax', 100)->nullable();
            $table->text('lawful_basis')->nullable();
            $table->date('date_reviewed')->nullable();
            $table->string('lawful_basis_source', 100)->nullable();
            $table->string('primary_address_street', 150)->nullable();
            $table->string('primary_address_city', 100)->nullable();
            $table->string('primary_address_state', 100)->nullable();
            $table->string('primary_address_postalcode', 20)->nullable();
            $table->string('primary_address_country')->nullable();
            $table->string('alt_address_street', 150)->nullable();
            $table->string('alt_address_city', 100)->nullable();
            $table->string('alt_address_state', 100)->nullable();
            $table->string('alt_address_postalcode', 20)->nullable();
            $table->string('alt_address_country')->nullable();
            $table->string('assistant', 75)->nullable();
            $table->string('assistant_phone', 100)->nullable();
            $table->integer('tracker_key', true)->index('prospect_auto_tracker_key');
            $table->date('birthdate')->nullable();
            $table->uuid('lead_id')->nullable();
            $table->string('account_name', 150)->nullable();
            $table->uuid('campaign_id')->nullable();

            $table->index(['last_name', 'deleted_at'], 'idx_prospecs_del_last');
            $table->index(['id', 'deleted_at'], 'idx_prospects_id_del');
            $table->index(['last_name', 'first_name', 'deleted_at'], 'idx_prospects_last_first');
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
        Schema::dropIfExists('prospects');
    }
};
