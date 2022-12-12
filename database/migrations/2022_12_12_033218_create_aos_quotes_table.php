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
        Schema::create('aos_quotes', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->text('approval_issue')->nullable();
            $table->uuid('billing_account_id')->nullable();
            $table->uuid('billing_contact_id')->nullable();
            $table->string('billing_address_street', 150)->nullable();
            $table->string('billing_address_city', 100)->nullable();
            $table->string('billing_address_state', 100)->nullable();
            $table->string('billing_address_postalcode', 20)->nullable();
            $table->string('billing_address_country')->nullable();
            $table->string('shipping_address_street', 150)->nullable();
            $table->string('shipping_address_city', 100)->nullable();
            $table->string('shipping_address_state', 100)->nullable();
            $table->string('shipping_address_postalcode', 20)->nullable();
            $table->string('shipping_address_country')->nullable();
            $table->date('expiration')->nullable();
            $table->integer('number')->nullable();
            $table->uuid('opportunity_id')->nullable();
            $table->text('template_ddown_c')->nullable();
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
            $table->uuid('currency_id')->nullable();
            $table->string('stage', 100)->nullable()->default('Draft');
            $table->string('term', 100)->nullable();
            $table->text('terms_c')->nullable();
            $table->string('approval_status', 100)->nullable();
            $table->string('invoice_status', 100)->nullable()->default('Not Invoiced');
            $table->decimal('subtotal_tax_amount', 26, 6)->nullable();
            $table->decimal('subtotal_tax_amount_usdollar', 26, 6)->nullable();
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
        Schema::dropIfExists('aos_quotes');
    }
};
