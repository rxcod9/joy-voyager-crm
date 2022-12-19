<?php

namespace Joy\VoyagerCrm\Database\Seeders\InboundEmail;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyInboundEmailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('InboundEmail')->factory()
            ->count($count)
            ->create();
    }
}
