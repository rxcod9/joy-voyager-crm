<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowWorkflow;

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
        $dataType = $this->dataType('slug', 'aow-workflows');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aow_workflow',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aow_workflow.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aow_workflow.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aow_workflow voyager-tools',
                'model_name'            => Voyager::modelClass('AowWorkflow'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AowWorkflowPolicy',
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
