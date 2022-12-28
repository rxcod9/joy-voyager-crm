<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsContact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CallsContactsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CallsContact')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CallsContact')->factory()
            ->count($count)
            ->create();
    }
}
