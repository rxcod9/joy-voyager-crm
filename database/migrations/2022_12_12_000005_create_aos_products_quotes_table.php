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
        Schema::create('aos_products_quotes', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->text('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->uuid('currency_id')->nullable();
            $table->string('part_number')->nullable();
            $table->text('item_description')->nullable();
            $table->integer('number')->nullable();
            $table->decimal('product_qty', 18, 4)->nullable();
            $table->decimal('product_cost_price', 26, 6)->nullable();
            $table->decimal('product_cost_price_usdollar', 26, 6)->nullable();
            $table->decimal('product_list_price', 26, 6)->nullable();
            $table->decimal('product_list_price_usdollar', 26, 6)->nullable();
            $table->decimal('product_discount', 26, 6)->nullable();
            $table->decimal('product_discount_usdollar', 26, 6)->nullable();
            $table->decimal('product_discount_amount', 26, 6)->nullable();
            $table->decimal('product_discount_amount_usdollar', 26, 6)->nullable();
            $table->string('discount')->nullable()->default('Percentage');
            $table->decimal('product_unit_price', 26, 6)->nullable();
            $table->decimal('product_unit_price_usdollar', 26, 6)->nullable();
            $table->decimal('vat_amt', 26, 6)->nullable();
            $table->decimal('vat_amt_usdollar', 26, 6)->nullable();
            $table->decimal('product_total_price', 26, 6)->nullable();
            $table->decimal('product_total_price_usdollar', 26, 6)->nullable();
            $table->string('vat', 100)->nullable()->default('5.0');
            $table->string('parent_type', 100)->nullable();
            $table->uuid('parent_id')->nullable();
            $table->uuid('product_id')->nullable();
            $table->uuid('group_id')->nullable();

            $table->index(['parent_id', 'parent_type', 'deleted_at'], 'idx_aospq_par_del');
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
        Schema::dropIfExists('aos_products_quotes');
    }
};
