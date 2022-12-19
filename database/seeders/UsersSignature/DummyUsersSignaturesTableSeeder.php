<?php

namespace Joy\VoyagerCrm\Database\Seeders\UsersSignature;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyUsersSignaturesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('UsersSignature')->factory()
            ->count($count)
            ->create();
    }
}
