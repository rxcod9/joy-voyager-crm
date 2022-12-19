<?php

namespace Joy\VoyagerCrm\Database\Seeders\ImportMap;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ImportMapsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('ImportMap')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('ImportMap')->factory()
            ->count($count)
            ->create();
    }
}
