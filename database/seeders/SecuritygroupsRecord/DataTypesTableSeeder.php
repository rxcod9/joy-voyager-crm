<?php

namespace Joy\VoyagerCrm\Database\Seeders\SecuritygroupsRecord;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'securitygroups-records');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'securitygroups_records',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.securitygroups_record.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.securitygroups_record.plural'),
                'icon'                  => 'fas fa-record-vinyl',
                'model_name'            => Voyager::modelClass('SecuritygroupsRecord'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\SecuritygroupsRecordPolicy',
                // 'controller'            => 'Joy\\VoyagerCrm\\Http\\Controllers\\VoyagerCrmController',
                'generate_permissions' => 1,
                'description'          => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return Voyager::model('DataType')->firstOrNew([$field => $for]);
    }
}