<?php

namespace Joy\VoyagerCrm\Database\Seeders\ContactsCase;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyContactsCasesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('ContactsCase')->factory()
            ->count($count)
            ->create();
    }
}
