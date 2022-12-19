<?php

namespace Joy\VoyagerCrm\Database\Seeders\UsersSignature;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class UsersSignaturesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('UsersSignature')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('UsersSignature')->factory()
            ->count($count)
            ->create();
    }
}
