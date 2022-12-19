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
        Schema::create('upgrade_history', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('filename')->nullable();
            $table->string('md5sum', 32)->nullable()->unique('upgrade_history_md5_uk');
            $table->string('type', 30)->nullable();
            $table->string('status', 50)->nullable();
            $table->string('version', 64)->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('id_name')->nullable();
            $table->longText('manifest')->nullable();
            $table->boolean('enabled')->nullable()->default(true);
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
        Schema::dropIfExists('upgrade_history');
    }
};
