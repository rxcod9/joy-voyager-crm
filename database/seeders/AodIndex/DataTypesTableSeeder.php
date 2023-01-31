<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndex;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aod-indexes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aod_index',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aod_index.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aod_index.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aod_index voyager-key',
                'model_name'            => Voyager::modelClass('AodIndex'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AodIndexPolicy',
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
