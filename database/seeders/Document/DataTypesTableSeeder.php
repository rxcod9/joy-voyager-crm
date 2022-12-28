<?php

namespace Joy\VoyagerCrm\Database\Seeders\Document;

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
        $dataType = $this->dataType('slug', 'documents');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'documents',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.document.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.document.plural'),
                'icon'                  => 'voyager-bread voyager-crm-document voyager-documentation',
                'model_name'            => Voyager::modelClass('Document'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\DocumentPolicy',
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
