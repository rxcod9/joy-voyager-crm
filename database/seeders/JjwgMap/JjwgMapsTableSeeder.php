<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgMap;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class JjwgMapsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('JjwgMap')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('JjwgMap')->factory()
            ->count($count)
            ->create();
    }
}
