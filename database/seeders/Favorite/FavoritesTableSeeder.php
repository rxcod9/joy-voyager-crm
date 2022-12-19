<?php

namespace Joy\VoyagerCrm\Database\Seeders\Favorite;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Favorite')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Favorite')->factory()
            ->count($count)
            ->create();
    }
}
