<?php

namespace Joy\VoyagerCrm\Database\Seeders\Release;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ReleasesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Release')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Release')->factory()
            ->count($count)
            ->create();
    }
}
