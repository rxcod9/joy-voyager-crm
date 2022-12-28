<?php

namespace Joy\VoyagerCrm\Database\Seeders\AmProjecttemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAmProjecttemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AmProjecttemplate')->factory()
            ->count($count)
            ->create();
    }
}
