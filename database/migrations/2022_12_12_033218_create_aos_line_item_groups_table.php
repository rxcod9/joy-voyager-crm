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
        Schema::create('aos_line_item_groups', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->decimal('total_amt', 26, 6)->nullable();
            $table->decimal('total_amt_usdollar', 26, 6)->nullable();
            $table->decimal('discount_amount', 26, 6)->nullable();
            $table->decimal('discount_amount_usdollar', 26, 6)->nullable();
            $table->decimal('subtotal_amount', 26, 6)->nullable();
            $table->decimal('subtotal_amount_usdollar', 26, 6)->nullable();
            $table->decimal('tax_amount', 26, 6)->nullable();
            $table->decimal('tax_amount_usdollar', 26, 6)->nullable();
            $table->decimal('subtotal_tax_amount', 26, 6)->nullable();
            $table->decimal('subtotal_tax_amount_usdollar', 26, 6)->nullable();
            $table->decimal('total_amount', 26, 6)->nullable();
            $table->decimal('total_amount_usdollar', 26, 6)->nullable();
            $table->string('parent_type', 100)->nullable();
            $table->uuid('parent_id')->nullable();
            $table->integer('number')->nullable();
            $table->uuid('currency_id')->nullable();
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
        Schema::dropIfExists('aos_line_item_groups');
    }
};
