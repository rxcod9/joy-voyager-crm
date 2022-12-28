<?php

namespace Joy\VoyagerCrm\Database\Seeders\Lead;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class LeadsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Lead')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Lead')->factory()
            ->count($count)
            ->create();
    }
}
