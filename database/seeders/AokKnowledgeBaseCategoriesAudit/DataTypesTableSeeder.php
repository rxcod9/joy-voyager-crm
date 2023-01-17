<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgeBaseCategoriesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aok-knowledge-base-categories-audit');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aok_knowledge_base_categories_audit',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aok_knowledge_base_categories_audit.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aok_knowledge_base_categories_audit.plural'),
                'icon'                  => 'fas fa-history',
                'model_name'            => Voyager::modelClass('AokKnowledgeBaseCategoriesAudit'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AokKnowledgeBaseCategoriesAuditPolicy',
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
