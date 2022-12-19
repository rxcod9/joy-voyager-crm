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
        Schema::create('folders_rel', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('id')->primary();
            $table->uuid('folder_id');
            $table->string('polymorphic_module', 25)->nullable();
            $table->uuid('polymorphic_id');

            $table->index(['folder_id', 'deleted_at', 'polymorphic_id'], 'idx_fr_id_deleted_poly');
            $table->index(['polymorphic_module', 'polymorphic_id'], 'idx_poly_module_poly_id');
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
        Schema::dropIfExists('folders_rel');
    }
};
