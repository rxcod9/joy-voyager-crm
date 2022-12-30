<?php

namespace Joy\VoyagerCrm\Database\Seeders\ContactsCase;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ContactsCasesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('ContactsCase')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('ContactsCase')->factory()
            ->count($count)
            ->create();
    }
}
