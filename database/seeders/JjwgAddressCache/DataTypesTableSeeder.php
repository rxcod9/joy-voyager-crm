<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgAddressCache;

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
        $dataType = $this->dataType('slug', 'jjwg-address-caches');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'jjwg_address_cache',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.jjwg_address_cache.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.jjwg_address_cache.plural'),
                'icon'                  => 'voyager-bread voyager-crm-jjwg_address_cache voyager-categories',
                'model_name'            => Voyager::modelClass('JjwgAddressCache'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\JjwgAddressCachePolicy',
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
