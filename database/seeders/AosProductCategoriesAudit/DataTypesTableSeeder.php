<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductCategoriesAudit;

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
        $dataType = $this->dataType('slug', 'aos-product-categories-audit');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_product_categories_audit',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_product_categories_audit.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_product_categories_audit.plural'),
                'icon'                  => 'fas fa-history',
                'model_name'            => Voyager::modelClass('AosProductCategoriesAudit'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosProductCategoriesAuditPolicy',
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
