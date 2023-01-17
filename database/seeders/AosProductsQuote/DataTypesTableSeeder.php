<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductsQuote;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aos-products-quotes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_products_quotes',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_products_quote.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_products_quote.plural'),
                'icon'                  => 'fa-solid fa-quote-left',
                'model_name'            => Voyager::modelClass('AosProductsQuote'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosProductsQuotePolicy',
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
