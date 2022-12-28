<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowProcessedAowAction;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AowProcessedAowActionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AowProcessedAowAction')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AowProcessedAowAction')->factory()
            ->count($count)
            ->create();
    }
}
