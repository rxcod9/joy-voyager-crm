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
        Schema::create('custom_fields', function (Blueprint $table) {
            $table->comment('');
            $table->uuid('bean_id')->nullable();
            $table->integer('set_num')->nullable()->default(0);
            $table->string('field0')->nullable();
            $table->string('field1')->nullable();
            $table->string('field2')->nullable();
            $table->string('field3')->nullable();
            $table->string('field4')->nullable();
            $table->string('field5')->nullable();
            $table->string('field6')->nullable();
            $table->string('field7')->nullable();
            $table->string('field8')->nullable();
            $table->string('field9')->nullable();

            $table->index(['bean_id', 'set_num'], 'idx_beanid_set_num');
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
        Schema::dropIfExists('custom_fields');
    }
};
