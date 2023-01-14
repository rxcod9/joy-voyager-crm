<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProjectTaskAudit;

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
        $dataType = $this->dataType('slug', 'project-task-audit');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'project_task_audit',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.project_task_audit.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.project_task_audit.plural'),
                'icon'                  => 'fas fa-history',
                'model_name'            => Voyager::modelClass('ProjectTaskAudit'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\ProjectTaskAuditPolicy',
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
