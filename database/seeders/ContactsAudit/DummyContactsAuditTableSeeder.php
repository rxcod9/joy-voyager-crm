<?php

namespace Joy\VoyagerCrm\Database\Seeders\ContactsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyContactsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('ContactsAudit')->factory()
            ->count($count)
            ->create();
    }
}
