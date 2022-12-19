<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgArea;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class JjwgAreasTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('JjwgArea')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('JjwgArea')->factory()
            ->count($count)
            ->create();
    }
}
