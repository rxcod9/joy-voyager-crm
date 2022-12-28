<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndex;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AodIndexesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AodIndex')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AodIndex')->factory()
            ->count($count)
            ->create();
    }
}
