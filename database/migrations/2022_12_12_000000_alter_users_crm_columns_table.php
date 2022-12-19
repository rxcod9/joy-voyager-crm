<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\{
    DB,
    Schema
};

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->comment('');
            // $table->uuid('id')->primary()->change();
            $table->string('user_name', 60)->nullable();
            $table->string('user_hash')->nullable();
            $table->boolean('system_generated_password')->nullable();
            $table->dateTime('pwd_last_changed')->nullable();
            $table->string('authenticate_id', 100)->nullable();
            $table->boolean('sugar_login')->nullable()->default(true);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->boolean('is_admin')->nullable()->default(false);
            $table->boolean('external_auth_only')->nullable()->default(false);
            $table->boolean('receive_notifications')->nullable()->default(true);
            $table->text('description')->nullable();
            $table->uuid('modified_by_id')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->string('title', 50)->nullable();
            $table->string('photo')->nullable();
            $table->string('department', 50)->nullable();
            $table->string('phone_home', 50)->nullable();
            $table->string('phone_mobile', 50)->nullable();
            $table->string('phone_work', 50)->nullable();
            $table->string('phone_other', 50)->nullable();
            $table->string('phone_fax', 50)->nullable();
            $table->string('status', 100)->nullable();
            $table->string('address_street', 150)->nullable();
            $table->string('address_city', 100)->nullable();
            $table->string('address_state', 100)->nullable();
            $table->string('address_country', 100)->nullable();
            $table->string('address_postalcode', 20)->nullable();

            $table->boolean('portal_only')->nullable()->default(false);
            $table->boolean('show_on_employees')->nullable()->default(true);
            $table->string('employee_status', 100)->nullable();
            $table->string('messenger_id', 100)->nullable();
            $table->string('messenger_type', 100)->nullable();
            $table->uuid('reports_to_id')->nullable();
            $table->boolean('is_group')->nullable();
            $table->boolean('factor_auth')->nullable();
            $table->string('factor_auth_interface')->nullable();

            $table->index(['user_name', 'is_group', 'status', DB::raw('last_name(30)'), DB::raw('first_name(30)'), 'id'], 'idx_user_name');
            // $table->timestamps();
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
        Schema::table('users', function (Blueprint $table) {
            // $table->id()->change();
            $table->dropIndex('idx_user_name');
            $table->dropColumn('user_name');
            $table->dropColumn('user_hash');
            $table->dropColumn('system_generated_password');
            $table->dropColumn('pwd_last_changed');
            $table->dropColumn('authenticate_id');
            $table->dropColumn('sugar_login');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('is_admin');
            $table->dropColumn('external_auth_only');
            $table->dropColumn('receive_notifications');
            $table->dropColumn('description');
            $table->dropColumn('modified_by_id');
            $table->dropColumn('created_by_id');
            $table->dropColumn('title');
            $table->dropColumn('photo');
            $table->dropColumn('department');
            $table->dropColumn('phone_home');
            $table->dropColumn('phone_mobile');
            $table->dropColumn('phone_work');
            $table->dropColumn('phone_other');
            $table->dropColumn('phone_fax');
            $table->dropColumn('status');
            $table->dropColumn('address_street');
            $table->dropColumn('address_city');
            $table->dropColumn('address_state');
            $table->dropColumn('address_country');
            $table->dropColumn('address_postalcode');
            $table->dropColumn('portal_only');
            $table->dropColumn('show_on_employees');
            $table->dropColumn('employee_status');
            $table->dropColumn('messenger_id');
            $table->dropColumn('messenger_type');
            $table->dropColumn('reports_to_id');
            $table->dropColumn('is_group');
            $table->dropColumn('factor_auth');
            $table->dropColumn('factor_auth_interface');
        });
    }
};
