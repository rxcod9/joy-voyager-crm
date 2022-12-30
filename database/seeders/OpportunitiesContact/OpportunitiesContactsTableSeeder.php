<?php

namespace Joy\VoyagerCrm\Database\Seeders\OpportunitiesContact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class OpportunitiesContactsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('OpportunitiesContact')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('OpportunitiesContact')->factory()
            ->count($count)
            ->create();
    }
}
