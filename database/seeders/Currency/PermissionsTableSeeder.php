<?php

namespace Joy\VoyagerCrm\Database\Seeders\Currency;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Voyager::model('Permission')->generateFor('currencies');
    }
}
