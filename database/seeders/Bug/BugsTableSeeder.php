<?php

namespace Joy\VoyagerCrm\Database\Seeders\Bug;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class BugsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Bug')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Bug')->factory()
            ->count($count)
            ->create();
    }
}
