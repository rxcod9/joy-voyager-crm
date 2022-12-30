<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsLead;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCallsLeadsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('CallsLead')->factory()
            ->count($count)
            ->create();
    }
}
