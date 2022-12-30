<?php

namespace Joy\VoyagerCrm\Database\Seeders\OpportunitiesContact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyOpportunitiesContactsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('OpportunitiesContact')->factory()
            ->count($count)
            ->create();
    }
}
