<?php

namespace Joy\VoyagerCrm\Database\Seeders\MeetingsUser;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyMeetingsUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('MeetingsUser')->factory()
            ->count($count)
            ->create();
    }
}
