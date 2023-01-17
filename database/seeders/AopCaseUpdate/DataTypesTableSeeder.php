<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseUpdate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aop-case-updates');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aop_case_updates',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aop_case_update.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aop_case_update.plural'),
                'icon'                  => 'fa-regular fa-address-book',
                'model_name'            => Voyager::modelClass('AopCaseUpdate'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AopCaseUpdatePolicy',
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
