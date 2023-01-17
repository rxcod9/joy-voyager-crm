<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowAction;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aow-actions');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aow_actions',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aow_action.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aow_action.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aow_action voyager-hammer',
                'model_name'            => Voyager::modelClass('AowAction'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AowActionPolicy',
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
