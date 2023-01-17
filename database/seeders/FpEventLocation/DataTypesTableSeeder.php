<?php

namespace Joy\VoyagerCrm\Database\Seeders\FpEventLocation;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'fp-event-locations');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'fp_event_locations',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.fp_event_location.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.fp_event_location.plural'),
                'icon'                  => 'voyager-bread voyager-crm-fp_event_location voyager-location',
                'model_name'            => Voyager::modelClass('FpEventLocation'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\FpEventLocationPolicy',
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
