<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowProcessedAowAction;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aow-processed-aow-actions');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aow_processed_aow_actions',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aow_processed_aow_action.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aow_processed_aow_action.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aow_processed_aow_action voyager-check-circle',
                'model_name'            => Voyager::modelClass('AowProcessedAowAction'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AowProcessedAowActionPolicy',
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
