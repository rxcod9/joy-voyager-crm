<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosPdfTemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosPdfTemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosPdfTemplate')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosPdfTemplate')->factory()
            ->count($count)
            ->create();
    }
}
