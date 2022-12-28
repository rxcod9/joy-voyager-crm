<?php

namespace Joy\VoyagerCrm\Database\Seeders\LinkedDocument;

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
        $dataType = $this->dataType('slug', 'linked-documents');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'linked_documents',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.linked_document.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.linked_document.plural'),
                'icon'                  => 'fa-solid fa-link',
                'model_name'            => Voyager::modelClass('LinkedDocument'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\LinkedDocumentPolicy',
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
