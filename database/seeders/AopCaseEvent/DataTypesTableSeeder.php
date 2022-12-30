<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseEvent;

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
        $dataType = $this->dataType('slug', 'aop-case-events');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aop_case_events',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aop_case_event.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aop_case_event.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aop_case_event voyager-categories',
                'model_name'            => Voyager::modelClass('AopCaseEvent'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AopCaseEventPolicy',
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