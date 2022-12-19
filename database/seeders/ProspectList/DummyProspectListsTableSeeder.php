<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProspectList;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyProspectListsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('ProspectList')->factory()
            ->count($count)
            ->create();
    }
}
