<?php

namespace Joy\VoyagerCrm\Database\Seeders\ImportMap;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'import-maps');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'import_maps',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.import_map.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.import_map.plural'),
                'icon'                  => 'voyager-bread voyager-crm-import_map voyager-upload',
                'model_name'            => Voyager::modelClass('ImportMap'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\ImportMapPolicy',
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
