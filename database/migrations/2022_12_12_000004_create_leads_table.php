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
        Schema::create('leads', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable()->index('idx_lead_assigned');
            $table->string('salutation')->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('photo')->nullable();
            $table->string('department', 100)->nullable();
            $table->boolean('do_not_call')->nullable()->default(false);
            $table->string('phone_home', 100)->nullable();
            $table->string('phone_mobile', 100)->nullable();
            $table->string('phone_work', 100)->nullable()->index('idx_lead_phone_work');
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
            $table->boolean('converted')->nullable()->default(false);
            $table->string('refered_by', 100)->nullable();
            $table->string('lead_source', 100)->nullable();
            $table->text('lead_source_description')->nullable();
            $table->string('status', 100)->nullable();
            $table->text('status_description')->nullable();
            $table->uuid('reports_to_id')->nullable()->index('idx_reports_to');
            $table->string('account_name')->nullable();
            $table->text('account_description')->nullable();
            $table->uuid('contact_id')->nullable()->index('idx_lead_contact');
            $table->uuid('account_id')->nullable();
            $table->uuid('opportunity_id')->nullable();
            $table->string('opportunity_name')->nullable();
            $table->string('opportunity_amount', 50)->nullable();
            $table->uuid('campaign_id')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('portal_name')->nullable();
            $table->string('portal_app')->nullable();
            $table->string('website')->nullable();

            $table->index(['account_name', 'deleted_at'], 'idx_lead_acct_name_first');
            $table->index(['last_name', 'status', 'deleted_at', 'first_name'], 'idx_lead_del_stat');
            $table->index(['id', 'deleted_at'], 'idx_leads_id_del');
            $table->index(['last_name', 'first_name', 'deleted_at'], 'idx_lead_last_first');
            $table->index(['deleted_at', 'assigned_user_id'], 'idx_del_user');
            $table->index(['account_id', 'deleted_at'], 'idx_leads_acct_del');
            $table->index(['opportunity_id', 'deleted_at'], 'idx_lead_opp_del');
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
        Schema::dropIfExists('leads');
    }
};
