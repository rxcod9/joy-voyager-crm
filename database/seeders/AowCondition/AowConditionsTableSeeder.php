<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowCondition;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AowConditionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AowCondition')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AowCondition')->factory()
            ->count($count)
            ->create();
    }
}
