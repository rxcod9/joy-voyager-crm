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
        Schema::create('am_projecttemplates_project_1_c', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('am_projecttemplates_project_1am_projecttemplates_ida')->nullable()->index('am_projecttemplates_project_1_ida1');
            $table->uuid('am_projecttemplates_project_1project_idb')->nullable()->index('am_projecttemplates_project_1_alt');
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
        Schema::dropIfExists('am_projecttemplates_project_1_c');
    }
};
