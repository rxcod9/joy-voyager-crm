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
        Schema::create('surveyquestionoptions_surveyquestionresponses', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('surveyq72c7options_ida')->nullable();
            $table->uuid('surveyq10d4sponses_idb')->nullable();

            $table->index(['surveyq72c7options_ida', 'surveyq10d4sponses_idb'], 'surveyquestionoptions_surveyquestionresponses_alt');
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
        Schema::dropIfExists('surveyquestionoptions_surveyquestionresponses');
    }
};
