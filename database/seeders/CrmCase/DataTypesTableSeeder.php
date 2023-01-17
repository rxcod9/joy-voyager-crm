<?php

namespace Joy\VoyagerCrm\Database\Seeders\CrmCase;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'cases');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'cases',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.case.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.case.plural'),
                'icon'                  => 'voyager-bread voyager-crm-case voyager-ticket',
                'model_name'            => Voyager::modelClass('CrmCase'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\CrmCasePolicy',
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
