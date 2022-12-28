<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorCondition;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AorConditionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AorCondition')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AorCondition')->factory()
            ->count($count)
            ->create();
    }
}
