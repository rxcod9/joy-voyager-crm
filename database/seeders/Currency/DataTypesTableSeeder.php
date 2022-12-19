<?php

namespace Joy\VoyagerCrm\Database\Seeders\Currency;

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
        $dataType = $this->dataType('slug', 'currencies');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'currencies',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.currency.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.currency.plural'),
                'icon'                  => 'voyager-bread voyager-crm-currency voyager-dollar',
                'model_name'            => Voyager::modelClass('Currency'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\CurrencyPolicy',
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
