<?php

namespace Joy\VoyagerCrm\Database\Seeders\DocumentRevision;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'document-revisions');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'document_revisions',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.document_revision.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.document_revision.plural'),
                'icon'                  => 'fa fa-history',
                'model_name'            => Voyager::modelClass('DocumentRevision'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\DocumentRevisionPolicy',
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
