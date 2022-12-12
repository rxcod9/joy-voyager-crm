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
        Schema::create('project_cstm', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id_c')->primary();
            $table->float('jjwg_maps_lng_c', 11, 8)->nullable()->default(0);
            $table->float('jjwg_maps_lat_c', 10, 8)->nullable()->default(0);
            $table->string('jjwg_maps_geocode_status_c')->nullable();
            $table->string('jjwg_maps_address_c')->nullable();
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
        Schema::dropIfExists('project_cstm');
    }
};
