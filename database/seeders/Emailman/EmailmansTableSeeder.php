<?php

namespace Joy\VoyagerCrm\Database\Seeders\Emailman;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class EmailmansTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Emailman')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Emailman')->factory()
            ->count($count)
            ->create();
    }
}
