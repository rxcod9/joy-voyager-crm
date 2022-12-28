<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgebase;

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
        $dataType = $this->dataType('slug', 'aok-knowledgebases');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aok_knowledgebase',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aok_knowledgebase.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aok_knowledgebase.plural'),
                'icon'                  => 'fa-solid fa-info',
                'model_name'            => Voyager::modelClass('AokKnowledgebase'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AokKnowledgebasePolicy',
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
