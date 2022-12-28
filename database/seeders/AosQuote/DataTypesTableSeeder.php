<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosQuote;

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
        $dataType = $this->dataType('slug', 'aos-quotes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_quotes',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_quote.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_quote.plural'),
                'icon'                  => 'fa-solid fa-quote-left',
                'model_name'            => Voyager::modelClass('AosQuote'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosQuotePolicy',
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
