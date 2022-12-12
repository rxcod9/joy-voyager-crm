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
        Schema::create('vcals', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            
            $table->uuid('user_id');
            $table->string('type', 100)->nullable();
            $table->string('source', 100)->nullable();
            $table->text('content')->nullable();

            $table->index(['type', 'user_id'], 'idx_vcal');
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
        Schema::dropIfExists('vcals');
    }
};
