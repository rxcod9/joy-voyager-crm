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
        Schema::create('aos_contracts', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_to_id')->nullable();
            $table->string('reference_code')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('total_contract_value', 26, 6)->nullable();
            $table->decimal('total_contract_value_usdollar', 26, 6)->nullable();
            $table->uuid('currency_id')->nullable();
            $table->string('status', 100)->nullable()->default('Not Started');
            $table->date('customer_signed_date')->nullable();
            $table->date('company_signed_date')->nullable();
            $table->dateTime('renewal_reminder_date')->nullable();
            $table->string('contract_type', 100)->nullable()->default('Type');
            $table->uuid('contract_account_id')->nullable();
            $table->uuid('opportunity_id')->nullable();
            $table->uuid('contact_id')->nullable();
            $table->uuid('call_id')->nullable();
            $table->decimal('total_amt', 26, 6)->nullable();
            $table->decimal('total_amt_usdollar', 26, 6)->nullable();
            $table->decimal('subtotal_amount', 26, 6)->nullable();
            $table->decimal('subtotal_amount_usdollar', 26, 6)->nullable();
            $table->decimal('discount_amount', 26, 6)->nullable();
            $table->decimal('discount_amount_usdollar', 26, 6)->nullable();
            $table->decimal('tax_amount', 26, 6)->nullable();
            $table->decimal('tax_amount_usdollar', 26, 6)->nullable();
            $table->decimal('shipping_amount', 26, 6)->nullable();
            $table->decimal('shipping_amount_usdollar', 26, 6)->nullable();
            $table->string('shipping_tax', 100)->nullable();
            $table->decimal('shipping_tax_amt', 26, 6)->nullable();
            $table->decimal('shipping_tax_amt_usdollar', 26, 6)->nullable();
            $table->decimal('total_amount', 26, 6)->nullable();
            $table->decimal('total_amount_usdollar', 26, 6)->nullable();
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
        Schema::dropIfExists('aos_contracts');
    }
};
