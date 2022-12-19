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
        Schema::create('currencies', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('name')->nullable();
            $table->uuid('symbol')->nullable();
            $table->string('iso4217', 3)->nullable();
            $table->double('conversion_rate')->nullable()->default(0);
            $table->string('status', 100)->nullable();

            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();

            $table->index(['name', 'deleted_at'], 'idx_currency_name');
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
        Schema::dropIfExists('currencies');
    }
};
