<?php

namespace Joy\VoyagerCrm\Database\Seeders\Favorite;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyFavoritesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Favorite')->factory()
            ->count($count)
            ->create();
    }
}
