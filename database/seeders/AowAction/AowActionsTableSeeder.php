<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowAction;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AowActionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AowAction')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AowAction')->factory()
            ->count($count)
            ->create();
    }
}
