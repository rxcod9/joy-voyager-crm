<?php

namespace Joy\VoyagerCrm\Database\Seeders\Reminder;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyRemindersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Reminder')->factory()
            ->count($count)
            ->create();
    }
}
