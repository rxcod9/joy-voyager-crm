<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailAddress;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyEmailAddressesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('EmailAddress')->factory()
            ->count($count)
            ->create();
    }
}
