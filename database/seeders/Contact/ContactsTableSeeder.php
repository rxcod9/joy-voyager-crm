<?php

namespace Joy\VoyagerCrm\Database\Seeders\Contact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ContactsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Contact')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Contact')->factory()
            ->count($count)
            ->create();
    }
}
