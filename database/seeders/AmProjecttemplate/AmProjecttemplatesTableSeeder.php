<?php

namespace Joy\VoyagerCrm\Database\Seeders\AmProjecttemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AmProjecttemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AmProjecttemplate')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AmProjecttemplate')->factory()
            ->count($count)
            ->create();
    }
}
