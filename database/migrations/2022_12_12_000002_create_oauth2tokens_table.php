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
        Schema::create('oauth2tokens', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->boolean('token_is_revoked')->nullable();
            $table->string('token_type')->nullable();
            $table->dateTime('access_token_expires')->nullable();
            $table->string('access_token', 4000)->nullable();
            $table->string('refresh_token', 4000)->nullable();
            $table->dateTime('refresh_token_expires')->nullable();
            $table->string('grant_type')->nullable();
            $table->string('state', 1024)->nullable();
            $table->uuid('client')->nullable();
            $table->uuid('assigned_to_id')->nullable();
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
        Schema::dropIfExists('oauth2tokens');
    }
};
