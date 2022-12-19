<?php

namespace Joy\VoyagerCrm\Database\Seeders\User;

use Joy\VoyagerCrm\Models\User;
use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
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
