<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailAddress;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class EmailAddressesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('EmailAddress')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('EmailAddress')->factory()
            ->count($count)
            ->create();
    }
}
