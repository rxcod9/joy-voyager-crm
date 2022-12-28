<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowProcessed;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AowProcessedTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AowProcessed')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AowProcessed')->factory()
            ->count($count)
            ->create();
    }
}
