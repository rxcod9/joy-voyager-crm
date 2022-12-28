<?php

namespace Joy\VoyagerCrm\Database\Seeders\MeetingsUser;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class MeetingsUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('MeetingsUser')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('MeetingsUser')->factory()
            ->count($count)
            ->create();
    }
}
