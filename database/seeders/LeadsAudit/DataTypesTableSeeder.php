<?php

namespace Joy\VoyagerCrm\Database\Seeders\LeadsAudit;

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
        $dataType = $this->dataType('slug', 'leads-audit');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'leads_audit',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.leads_audit.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.leads_audit.plural'),
                'icon'                  => 'fas fa-history',
                'model_name'            => Voyager::modelClass('LeadsAudit'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\LeadsAuditPolicy',
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
