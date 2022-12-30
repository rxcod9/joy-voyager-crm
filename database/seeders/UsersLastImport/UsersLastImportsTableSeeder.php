<?php

namespace Joy\VoyagerCrm\Database\Seeders\UsersLastImport;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class UsersLastImportsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('UsersLastImport')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('UsersLastImport')->factory()
            ->count($count)
            ->create();
    }
}
