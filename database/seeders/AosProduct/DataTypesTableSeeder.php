<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProduct;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aos-products');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_products',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_product.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_product.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aos_product voyager-tag',
                'model_name'            => Voyager::modelClass('AosProduct'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosProductPolicy',
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
