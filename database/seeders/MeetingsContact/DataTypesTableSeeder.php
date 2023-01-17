<?php

namespace Joy\VoyagerCrm\Database\Seeders\MeetingsContact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'meetings-contacts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'meetings_contacts',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.meetings_contact.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.meetings_contact.plural'),
                'icon'                  => 'voyager-bread voyager-crm-meetings_contact voyager-people',
                'model_name'            => Voyager::modelClass('MeetingsContact'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\MeetingsContactPolicy',
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
