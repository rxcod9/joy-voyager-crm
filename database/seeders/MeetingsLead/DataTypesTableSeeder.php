<?php

namespace Joy\VoyagerCrm\Database\Seeders\MeetingsLead;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'meetings-leads');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'meetings_leads',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.meetings_lead.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.meetings_lead.plural'),
                'icon'                  => 'fa fa-bullhorn',
                'model_name'            => Voyager::modelClass('MeetingsLead'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\MeetingsLeadPolicy',
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
