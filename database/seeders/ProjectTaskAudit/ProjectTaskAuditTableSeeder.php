<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProjectTaskAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ProjectTaskAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('ProjectTaskAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('ProjectTaskAudit')->factory()
            ->count($count)
            ->create();
    }
}
