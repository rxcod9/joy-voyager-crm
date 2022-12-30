<?php

namespace Joy\VoyagerCrm\Database\Seeders\UsersLastImport;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyUsersLastImportsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('UsersLastImport')->factory()
            ->count($count)
            ->create();
    }
}
