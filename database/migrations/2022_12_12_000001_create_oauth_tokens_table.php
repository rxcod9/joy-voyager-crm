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
        Schema::create('oauth_tokens', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id');
            $table->string('secret', 32)->nullable();
            $table->string('tstate', 1)->nullable();
            $table->uuid('consumer')->index('constoken_key');
            $table->bigInteger('token_ts')->nullable();
            $table->string('verify', 32)->nullable();
            // $table->boolean('deleted')->default(false);
            $table->string('callback_url')->nullable();
            $table->uuid('assigned_user_id')->nullable();

            $table->index(['tstate', 'token_ts'], 'oauth_state_ts');
            $table->primary(['id', 'deleted_at']);
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
        Schema::dropIfExists('oauth_tokens');
    }
};
