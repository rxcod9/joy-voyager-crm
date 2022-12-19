<?php

namespace Joy\VoyagerCrm\Database\Seeders\SavedSearch;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SavedSearchsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('SavedSearch')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('SavedSearch')->factory()
            ->count($count)
            ->create();
    }
}
