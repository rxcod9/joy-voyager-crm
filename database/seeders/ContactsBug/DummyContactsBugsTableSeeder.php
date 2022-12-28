<?php

namespace Joy\VoyagerCrm\Database\Seeders\ContactsBug;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyContactsBugsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('ContactsBug')->factory()
            ->count($count)
            ->create();
    }
}
