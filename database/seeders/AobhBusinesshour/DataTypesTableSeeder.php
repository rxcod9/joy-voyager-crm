<?php

namespace Joy\VoyagerCrm\Database\Seeders\AobhBusinesshour;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aobh-businesshours');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aobh_businesshours',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aobh_businesshour.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aobh_businesshour.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aobh_businesshour voyager-watch',
                'model_name'            => Voyager::modelClass('AobhBusinesshour'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AobhBusinesshourPolicy',
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
