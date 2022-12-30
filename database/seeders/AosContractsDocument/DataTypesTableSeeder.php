<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosContractsDocument;

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
        $dataType = $this->dataType('slug', 'aos-contracts-documents');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_contracts_documents',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_contracts_document.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_contracts_document.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aos_contracts_document voyager-documentation',
                'model_name'            => Voyager::modelClass('AosContractsDocument'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosContractsDocumentPolicy',
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
