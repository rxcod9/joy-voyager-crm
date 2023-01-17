<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowProcessed;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aow-processed');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aow_processed',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aow_processed.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aow_processed.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aow_processed voyager-check-circle',
                'model_name'            => Voyager::modelClass('AowProcessed'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AowProcessedPolicy',
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
