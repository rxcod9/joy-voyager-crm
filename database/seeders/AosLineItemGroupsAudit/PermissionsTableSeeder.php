<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosLineItemGroupsAudit;

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
        Voyager::model('Permission')->generateFor('aos_line_item_groups_audit');
    }
}
