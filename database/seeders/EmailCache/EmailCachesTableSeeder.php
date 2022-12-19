<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailCache;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class EmailCachesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('EmailCache')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('EmailCache')->factory()
            ->count($count)
            ->create();
    }
}
