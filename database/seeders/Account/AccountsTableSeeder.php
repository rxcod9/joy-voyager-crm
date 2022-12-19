<?php

namespace Joy\VoyagerCrm\Database\Seeders\Account;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AccountsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Account')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Account')->factory()
            ->count($count)
            ->create();
    }
}
