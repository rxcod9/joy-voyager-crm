<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgMarker;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'jjwg-markers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'jjwg_markers',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.jjwg_marker.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.jjwg_marker.plural'),
                'icon'                  => 'voyager-bread voyager-crm-jjwg_marker voyager-location',
                'model_name'            => Voyager::modelClass('JjwgMarker'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\JjwgMarkerPolicy',
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
