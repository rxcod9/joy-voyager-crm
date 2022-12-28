<?php

namespace Joy\VoyagerCrm\Database\Seeders\MeetingsContact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class MeetingsContactsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('MeetingsContact')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('MeetingsContact')->factory()
            ->count($count)
            ->create();
    }
}
