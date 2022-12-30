<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProspectListsProspect;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ProspectListsProspectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('ProspectListsProspect')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('ProspectListsProspect')->factory()
            ->count($count)
            ->create();
    }
}
