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
        Schema::create('oauth2clients', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->string('secret', 4000)->nullable();
            $table->string('redirect_url')->nullable();
            $table->boolean('is_confidential')->nullable()->default(true);
            $table->string('allowed_grant_type')->nullable()->default('password');
            $table->integer('duration_value')->nullable();
            $table->integer('duration_amount')->nullable();
            $table->string('duration_unit')->nullable()->default('Duration Unit');
            $table->uuid('assigned_user_id')->nullable();
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
        Schema::dropIfExists('oauth2clients');
    }
};
