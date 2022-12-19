<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProspectList;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'prospect-lists');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'prospect_lists',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.prospect_list.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.prospect_list.plural'),
                'icon'                  => 'voyager-bread voyager-crm-prospect_list voyager-categories',
                'model_name'            => Voyager::modelClass('ProspectList'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\ProspectListPolicy',
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
