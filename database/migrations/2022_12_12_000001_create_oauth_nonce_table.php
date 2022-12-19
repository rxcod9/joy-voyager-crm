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
        Schema::create('oauth_nonce', function (Blueprint $table) {
            $table->comment('');
            $table->string('conskey', 32);
            $table->string('nonce', 32);
            $table->bigInteger('nonce_ts')->nullable();

            $table->index(['conskey', 'nonce_ts'], 'oauth_nonce_keyts');
            $table->primary(['conskey', 'nonce']);
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
        Schema::dropIfExists('oauth_nonce');
    }
};
