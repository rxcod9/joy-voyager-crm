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
        Schema::create('eapm', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->string('password')->nullable();
            $table->string('url')->nullable();
            $table->string('application', 100)->nullable()->default('webex');
            $table->text('api_data')->nullable();
            $table->string('consumer_key')->nullable();
            $table->string('consumer_secret')->nullable();
            $table->string('oauth_token')->nullable();
            $table->string('oauth_secret')->nullable();
            $table->boolean('validated')->nullable();

            $table->index(['assigned_user_id', 'application', 'validated'], 'idx_app_active');
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
        Schema::dropIfExists('eapm');
    }
};
