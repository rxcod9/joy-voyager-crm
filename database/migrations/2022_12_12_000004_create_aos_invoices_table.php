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
        Schema::create('aos_invoices', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
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
            $table->integer('number');
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
            $table->integer('quote_number')->nullable();
            $table->date('quote_date')->nullable();
            $table->date('invoice_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('status', 100)->nullable();
            $table->text('template_ddown_c')->nullable();
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
        Schema::dropIfExists('aos_invoices');
    }
};
