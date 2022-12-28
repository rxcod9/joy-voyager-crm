<?php

namespace Joy\VoyagerCrm\Database\Seeders\Scheduler;

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
        $dataType = $this->dataType('slug', 'schedulers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'schedulers',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.scheduler.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.scheduler.plural'),
                'icon'                  => 'voyager-bread voyager-crm-scheduler voyager-alarm-clock',
                'model_name'            => Voyager::modelClass('Scheduler'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\SchedulerPolicy',
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
