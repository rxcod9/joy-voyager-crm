<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsReschedule;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CallsReschedulesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CallsReschedule')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CallsReschedule')->factory()
            ->count($count)
            ->create();
    }
}
