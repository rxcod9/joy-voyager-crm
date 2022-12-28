<?php

namespace Joy\VoyagerCrm\Database\Seeders\Contact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyContactsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Contact')->factory()
            ->count($count)
            ->create();
    }
}
