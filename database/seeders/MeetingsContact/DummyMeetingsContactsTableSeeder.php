<?php

namespace Joy\VoyagerCrm\Database\Seeders\MeetingsContact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyMeetingsContactsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('MeetingsContact')->factory()
            ->count($count)
            ->create();
    }
}
