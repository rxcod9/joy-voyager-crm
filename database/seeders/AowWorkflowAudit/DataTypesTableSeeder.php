<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowWorkflowAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aow-workflow-audit');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aow_workflow_audit',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aow_workflow_audit.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aow_workflow_audit.plural'),
                'icon'                  => 'fas fa-history',
                'model_name'            => Voyager::modelClass('AowWorkflowAudit'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AowWorkflowAuditPolicy',
                // 'controller'            => 'Joy\\VoyagerCrm\\Http\\Controllers\\VoyagerCrmController',
                'generate_permissions'  => 1,
                'description'           => '',
                'order_column'          => 'created_at',
                'order_direction'       => 'desc',
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
