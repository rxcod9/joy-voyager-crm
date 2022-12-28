<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseUpdate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AopCaseUpdatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AopCaseUpdate')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AopCaseUpdate')->factory()
            ->count($count)
            ->create();
    }
}
