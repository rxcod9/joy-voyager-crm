<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsReschedule;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'calls-reschedules');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'calls_reschedule',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.calls_reschedule.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.calls_reschedule.plural'),
                'icon'                  => 'voyager-bread voyager-crm-calls_reschedule voyager-refresh',
                'model_name'            => Voyager::modelClass('CallsReschedule'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\CallsReschedulePolicy',
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
