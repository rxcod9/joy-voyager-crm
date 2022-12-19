<?php

namespace Joy\VoyagerCrm\Database\Seeders\Scheduler;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SchedulersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Scheduler')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Scheduler')->factory()
            ->count($count)
            ->create();
    }
}
