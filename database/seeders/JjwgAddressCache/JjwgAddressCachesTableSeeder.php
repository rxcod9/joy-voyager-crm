<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgAddressCache;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class JjwgAddressCachesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('JjwgAddressCache')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('JjwgAddressCache')->factory()
            ->count($count)
            ->create();
    }
}
