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
        Schema::create('contacts', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable()->index('idx_cont_assigned');
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
            $table->string('lead_source')->nullable();
            $table->uuid('reports_to_id')->nullable()->index('idx_reports_to_id');
            $table->date('birthdate')->nullable();
            $table->uuid('campaign_id')->nullable();
            $table->string('joomla_account_id')->nullable();
            $table->boolean('portal_account_disabled')->nullable();
            $table->string('portal_user_type', 100)->nullable()->default('Single');

            $table->index(['deleted_at', 'reports_to_id', 'last_name'], 'idx_cont_del_reports');
            $table->index(['last_name', 'first_name', 'deleted_at'], 'idx_cont_last_first');
            $table->index(['deleted_at', 'last_name'], 'idx_contacts_del_last');
            $table->index(['deleted_at', 'id', 'assigned_user_id'], 'idx_del_id_user');
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
        Schema::dropIfExists('contacts');
    }
};
