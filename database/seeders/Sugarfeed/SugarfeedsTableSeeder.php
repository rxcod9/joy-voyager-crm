<?php

namespace Joy\VoyagerCrm\Database\Seeders\Sugarfeed;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SugarfeedsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Sugarfeed')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Sugarfeed')->factory()
            ->count($count)
            ->create();
    }
}
