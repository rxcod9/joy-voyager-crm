<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProjectTaskAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyProjectTaskAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('ProjectTaskAudit')->factory()
            ->count($count)
            ->create();
    }
}
