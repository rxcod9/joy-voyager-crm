<?php

namespace Joy\VoyagerCrm\Database\Seeders\Meeting;

use Illuminate\Database\Seeder;

class VoyagerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            // MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            // RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            'Database\\Seeders\\PermissionRoleTableSeeder',
            // SettingsTableSeeder::class,
            // UserSettingsPermissionsTableSeeder::class,
            'Database\\Seeders\\PermissionRoleTableSeeder',
            // UserSettingsTableSeeder::class,
            MeetingsTableSeeder::class,
        ]);
    }
}
