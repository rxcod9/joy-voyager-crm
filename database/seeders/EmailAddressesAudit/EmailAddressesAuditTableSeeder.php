<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailAddressesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class EmailAddressesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('EmailAddressesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('EmailAddressesAudit')->factory()
            ->count($count)
            ->create();
    }
}
