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
        Schema::create('user_preferences', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('category', 50)->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->longText('contents')->nullable();

            $table->index(['assigned_user_id', 'category'], 'idx_userprefnamecat');
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
        Schema::dropIfExists('user_preferences');
    }
};
