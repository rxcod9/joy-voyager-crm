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
        Schema::create('email_addr_bean_rel', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('email_address_id')->index('idx_email_address_id');
            $table->uuid('bean_id');
            $table->string('bean_module', 100)->nullable();
            $table->boolean('primary_address')->nullable()->default(false);
            $table->boolean('reply_to_address')->nullable()->default(false);

            $table->index(['bean_id', 'bean_module'], 'idx_bean_id');
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
        Schema::dropIfExists('email_addr_bean_rel');
    }
};
