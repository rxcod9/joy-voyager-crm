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
        Schema::create('accounts', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name', 150)->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->string('account_type', 50)->nullable();
            $table->string('industry', 50)->nullable();
            $table->string('annual_revenue', 100)->nullable();
            $table->string('phone_fax', 100)->nullable();
            $table->string('billing_address_street', 150)->nullable();
            $table->string('billing_address_city', 100)->nullable();
            $table->string('billing_address_state', 100)->nullable();
            $table->string('billing_address_postalcode', 20)->nullable();
            $table->string('billing_address_country')->nullable();
            $table->string('rating', 100)->nullable();
            $table->string('phone_office', 100)->nullable();
            $table->string('phone_alternate', 100)->nullable();
            $table->string('website')->nullable();
            $table->string('ownership', 100)->nullable();
            $table->string('employees', 10)->nullable();
            $table->string('ticker_symbol', 10)->nullable();
            $table->string('shipping_address_street', 150)->nullable();
            $table->string('shipping_address_city', 100)->nullable();
            $table->string('shipping_address_state', 100)->nullable();
            $table->string('shipping_address_postalcode', 20)->nullable();
            $table->string('shipping_address_country')->nullable();
            $table->uuid('parent_id')->nullable()->index('idx_accnt_parent_id');
            $table->string('sic_code', 10)->nullable();
            $table->uuid('campaign_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at', 'assigned_user_id'], 'idx_accnt_assigned_del');
            $table->index(['id', 'deleted_at'], 'idx_accnt_id_del');
            $table->index(['name', 'deleted_at'], 'idx_accnt_name_del');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
