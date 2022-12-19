<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProspectList;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ProspectListsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('ProspectList')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('ProspectList')->factory()
            ->count($count)
            ->create();
    }
}
