<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosQuotesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosQuotesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosQuotesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosQuotesAudit')->factory()
            ->count($count)
            ->create();
    }
}
