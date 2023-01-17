<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorField;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aor-fields');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aor_fields',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aor_field.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aor_field.plural'),
                'icon'                  => 'fas fa-pen',
                'model_name'            => Voyager::modelClass('AorField'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AorFieldPolicy',
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
