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
        Schema::create('folders_subscriptions', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('folder_id');
            $table->uuid('assigned_user_id');

            $table->index(['folder_id', 'assigned_user_id'], 'idx_folder_id_assigned_user_id');
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
        Schema::dropIfExists('folders_subscriptions');
    }
};
