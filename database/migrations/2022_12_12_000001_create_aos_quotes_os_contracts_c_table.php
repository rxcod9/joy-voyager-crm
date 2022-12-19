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
        Schema::create('aos_quotes_os_contracts_c', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('aos_quotese81e_quotes_ida')->nullable();
            $table->uuid('aos_quotes4dc0ntracts_idb')->nullable();

            $table->index(['aos_quotese81e_quotes_ida', 'aos_quotes4dc0ntracts_idb'], 'aos_quotes_aos_contracts_alt');
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
        Schema::dropIfExists('aos_quotes_os_contracts_c');
    }
};
