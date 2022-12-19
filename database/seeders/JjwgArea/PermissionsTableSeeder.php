<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgArea;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Voyager::model('Permission')->generateFor('jjwg_areas');
    }
}
