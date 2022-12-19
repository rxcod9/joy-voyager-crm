<?php

namespace Joy\VoyagerCrm\Database\Seeders\Meeting;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Meeting')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Meeting')->factory()
            ->count($count)
            ->create();
    }
}
