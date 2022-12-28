<?php

namespace Joy\VoyagerCrm\Database\Seeders\Reminder;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class RemindersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Reminder')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Reminder')->factory()
            ->count($count)
            ->create();
    }
}
