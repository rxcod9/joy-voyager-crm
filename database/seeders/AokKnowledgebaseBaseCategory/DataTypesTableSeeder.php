<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgebaseBaseCategory;

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
        $dataType = $this->dataType('slug', 'aok-knowledgebase-base-categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aok_knowledgebase_base_categories',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aok_knowledgebase_base_category.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aok_knowledgebase_base_category.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aok_knowledgebase_base_category voyager-categories',
                'model_name'            => Voyager::modelClass('AokKnowledgebaseBaseCategory'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AokKnowledgebaseBaseCategoryPolicy',
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
