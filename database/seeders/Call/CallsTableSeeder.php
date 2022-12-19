<?php

namespace Joy\VoyagerCrm\Database\Seeders\Call;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CallsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Call')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Call')->factory()
            ->count($count)
            ->create();
    }
}
