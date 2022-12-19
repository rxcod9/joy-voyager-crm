<?php

namespace Joy\VoyagerCrm\Database\Seeders\Account;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAccountsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Account')->factory()
            ->count($count)
            ->create();
    }
}
