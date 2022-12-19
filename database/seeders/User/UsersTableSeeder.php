<?php

namespace Joy\VoyagerCrm\Database\Seeders\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('User')->query()->count() > 0) {
            return false;
        }

        $role = Voyager::model('Role')->where('name', 'admin')->firstOrFail();

        Voyager::model('User')->factory()
            ->count(1)
            ->state(function (array $attributes) use ($role) {
                return [
                    'name'           => 'Admin',
                    'email'          => 'admin@admin.com',
                    'password'       => bcrypt('password'),
                    'remember_token' => Str::random(60),
                    'role_id'        => $role->id,
                ];
            })
            ->create();

        $count = 20;
        Voyager::model('User')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'User ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'User Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
