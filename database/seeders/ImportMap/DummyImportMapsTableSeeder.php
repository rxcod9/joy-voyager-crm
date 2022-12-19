<?php

namespace Joy\VoyagerCrm\Database\Seeders\ImportMap;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyImportMapsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('ImportMap')->factory()
            ->count($count)
            ->create();
    }
}
