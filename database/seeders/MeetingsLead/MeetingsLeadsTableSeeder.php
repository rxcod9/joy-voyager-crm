<?php

namespace Joy\VoyagerCrm\Database\Seeders\MeetingsLead;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class MeetingsLeadsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('MeetingsLead')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('MeetingsLead')->factory()
            ->count($count)
            ->create();
    }
}
