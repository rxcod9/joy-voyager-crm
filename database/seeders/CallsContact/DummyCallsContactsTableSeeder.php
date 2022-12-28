<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsContact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCallsContactsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('CallsContact')->factory()
            ->count($count)
            ->create();
    }
}
