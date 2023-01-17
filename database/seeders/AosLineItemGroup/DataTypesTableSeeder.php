<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosLineItemGroup;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aos-line-item-groups');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_line_item_groups',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_line_item_group.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_line_item_group.plural'),
                'icon'                  => 'fas fa-layer-group',
                'model_name'            => Voyager::modelClass('AosLineItemGroup'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosLineItemGroupPolicy',
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
