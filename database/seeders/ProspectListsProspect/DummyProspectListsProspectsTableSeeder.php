<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProspectListsProspect;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyProspectListsProspectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('ProspectListsProspect')->factory()
            ->count($count)
            ->create();
    }
}
