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
        Schema::create('jjwg_markers', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->text('description')->nullable();
            $table->uuid('assigned_user_id')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->float('jjwg_maps_lat', 10, 8)->nullable()->default(0);
            $table->float('jjwg_maps_lng', 11, 8)->nullable()->default(0);
            $table->string('marker_image', 100)->nullable()->default('company');
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
        Schema::dropIfExists('jjwg_markers');
    }
};
