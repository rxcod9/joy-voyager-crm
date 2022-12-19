<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProjectTask;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Voyager::model('Permission')->generateFor('project_task');
    }
}
