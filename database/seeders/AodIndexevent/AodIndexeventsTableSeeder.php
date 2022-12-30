<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndexevent;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AodIndexeventsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AodIndexevent')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AodIndexevent')->factory()
            ->count($count)
            ->create();
    }
}
