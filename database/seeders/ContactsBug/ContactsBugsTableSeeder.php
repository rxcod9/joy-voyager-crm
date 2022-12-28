<?php

namespace Joy\VoyagerCrm\Database\Seeders\ContactsBug;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ContactsBugsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('ContactsBug')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('ContactsBug')->factory()
            ->count($count)
            ->create();
    }
}
