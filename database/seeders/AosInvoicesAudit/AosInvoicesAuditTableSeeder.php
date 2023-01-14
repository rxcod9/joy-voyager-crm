<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosInvoicesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosInvoicesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosInvoicesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosInvoicesAudit')->factory()
            ->count($count)
            ->create();
    }
}
