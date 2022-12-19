<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailCache;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyEmailCachesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('EmailCache')->factory()
            ->count($count)
            ->create();
    }
}
