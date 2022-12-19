<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgMarker;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class JjwgMarkersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('JjwgMarker')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('JjwgMarker')->factory()
            ->count($count)
            ->create();
    }
}
