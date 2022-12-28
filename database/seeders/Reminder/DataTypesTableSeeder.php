<?php

namespace Joy\VoyagerCrm\Database\Seeders\Reminder;

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
        $dataType = $this->dataType('slug', 'reminders');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'reminders',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.reminder.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.reminder.plural'),
                'icon'                  => 'voyager-bread voyager-crm-reminder voyager-alarm-clock',
                'model_name'            => Voyager::modelClass('Reminder'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\ReminderPolicy',
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
