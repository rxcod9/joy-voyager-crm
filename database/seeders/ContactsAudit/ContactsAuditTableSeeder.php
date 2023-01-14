<?php

namespace Joy\VoyagerCrm\Database\Seeders\ContactsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ContactsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('ContactsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('ContactsAudit')->factory()
            ->count($count)
            ->create();
    }
}
