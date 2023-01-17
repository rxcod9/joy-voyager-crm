<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgMap;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'jjwg-maps');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'jjwg_maps',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.jjwg_map.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.jjwg_map.plural'),
                'icon'                  => 'voyager-bread voyager-crm-jjwg_map voyager-location',
                'model_name'            => Voyager::modelClass('JjwgMap'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\JjwgMapPolicy',
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
