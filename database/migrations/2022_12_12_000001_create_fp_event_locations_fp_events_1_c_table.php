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
        Schema::create('fp_event_locations_fp_events_1_c', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('fp_event_locations_fp_events_1fp_event_locations_ida')->nullable()->index('fp_event_locations_fp_events_1_ida1');
            $table->uuid('fp_event_locations_fp_events_1fp_events_idb')->nullable()->index('fp_event_locations_fp_events_1_alt');
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
        Schema::dropIfExists('fp_event_locations_fp_events_1_c');
    }
};
