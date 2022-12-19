<?php

namespace Joy\VoyagerCrm\Database\Seeders\Spot;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'spots');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'spots',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.spot.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.spot.plural'),
                'icon'                  => 'voyager-bread voyager-crm-spot voyager-categories',
                'model_name'            => Voyager::modelClass('Spot'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\SpotPolicy',
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
