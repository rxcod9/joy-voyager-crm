<?php

namespace Joy\VoyagerCrm\Database\Seeders\Alert;

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
        $dataType = $this->dataType('slug', 'alerts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'alerts',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.alert.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.alert.plural'),
                'icon'                  => 'voyager-bread voyager-crm-alert voyager-bell',
                'model_name'            => Voyager::modelClass('Alert'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AlertPolicy',
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
