<?php

namespace Joy\VoyagerCrm\Database\Seeders\AmTasktemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAmTasktemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AmTasktemplate')->factory()
            ->count($count)
            ->create();
    }
}
