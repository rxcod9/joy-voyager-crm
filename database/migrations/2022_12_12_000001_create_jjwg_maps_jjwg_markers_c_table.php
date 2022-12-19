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
        Schema::create('jjwg_maps_jjwg_markers_c', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('jjwg_maps_b229wg_maps_ida')->nullable();
            $table->uuid('jjwg_maps_2e31markers_idb')->nullable();

            $table->index(['jjwg_maps_b229wg_maps_ida', 'jjwg_maps_2e31markers_idb'], 'jjwg_maps_jjwg_markers_alt');
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
        Schema::dropIfExists('jjwg_maps_jjwg_markers_c');
    }
};
