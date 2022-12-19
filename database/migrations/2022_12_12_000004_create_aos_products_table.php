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
        Schema::create('aos_products', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->string('maincode', 100)->nullable()->default('XXXX');
            $table->string('part_number', 25)->nullable();
            $table->string('category', 100)->nullable();
            $table->string('type', 100)->nullable()->default('Good');
            $table->decimal('cost', 26, 6)->nullable();
            $table->decimal('cost_usdollar', 26, 6)->nullable();
            $table->uuid('currency_id')->nullable();
            $table->decimal('price', 26, 6)->nullable();
            $table->decimal('price_usdollar', 26, 6)->nullable();
            $table->string('url')->nullable();
            $table->uuid('contact_id')->nullable();
            $table->string('product_image')->nullable();
            $table->uuid('aos_product_category_id')->nullable();
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
        Schema::dropIfExists('aos_products');
    }
};
