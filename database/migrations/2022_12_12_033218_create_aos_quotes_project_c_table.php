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
        Schema::create('aos_quotes_project_c', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('aos_quotes1112_quotes_ida')->nullable();
            $table->uuid('aos_quotes7207project_idb')->nullable();

            $table->index(['aos_quotes1112_quotes_ida', 'aos_quotes7207project_idb'], 'aos_quotes_project_alt');
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
        Schema::dropIfExists('aos_quotes_project_c');
    }
};
