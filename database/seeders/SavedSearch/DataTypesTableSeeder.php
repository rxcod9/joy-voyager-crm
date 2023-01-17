<?php

namespace Joy\VoyagerCrm\Database\Seeders\SavedSearch;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'saved-search');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'saved_search',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.saved_search.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.saved_search.plural'),
                'icon'                  => 'voyager-bread voyager-crm-saved_search voyager-search',
                'model_name'            => Voyager::modelClass('SavedSearch'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\SavedSearchPolicy',
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
