<?php

namespace Joy\VoyagerCrm\Database\Seeders\Opportunity;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class OpportunitiesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Opportunity')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Opportunity')->factory()
            ->count($count)
            ->create();
    }
}
