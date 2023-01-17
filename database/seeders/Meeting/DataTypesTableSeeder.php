<?php

namespace Joy\VoyagerCrm\Database\Seeders\Meeting;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'meetings');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'meetings',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.meeting.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.meeting.plural'),
                'icon'                  => 'fas fa-handshake',
                'model_name'            => Voyager::modelClass('Meeting'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\MeetingPolicy',
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
