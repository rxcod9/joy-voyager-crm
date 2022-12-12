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
        Schema::create('users_signatures', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            
            $table->uuid('user_id')->nullable()->index('idx_usersig_uid');
            $table->string('name')->nullable();
            $table->text('signature')->nullable();
            $table->text('signature_html')->nullable();
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
        Schema::dropIfExists('users_signatures');
    }
};
