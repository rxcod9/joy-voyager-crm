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
        Schema::create('contacts_cases', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('contact_id')->nullable()->index('idx_con_case_con');
            $table->uuid('case_id')->nullable()->index('idx_con_case_case');
            $table->string('contact_role', 50)->nullable();

            $table->index(['contact_id', 'case_id'], 'idx_contacts_cases');
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
        Schema::dropIfExists('contacts_cases');
    }
};
