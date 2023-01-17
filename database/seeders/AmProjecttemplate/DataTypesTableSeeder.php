<?php

namespace Joy\VoyagerCrm\Database\Seeders\AmProjecttemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'am-projecttemplates');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'am_projecttemplates',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.am_projecttemplate.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.am_projecttemplate.plural'),
                'icon'                  => 'fa-solid fa-file-lines',
                'model_name'            => Voyager::modelClass('AmProjecttemplate'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AmProjecttemplatePolicy',
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
