<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndexevent;

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
        $dataType = $this->dataType('slug', 'aod-indexevents');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aod_indexevent',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aod_indexevent.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aod_indexevent.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aod_indexevent voyager-calendar',
                'model_name'            => Voyager::modelClass('AodIndexevent'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AodIndexeventPolicy',
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
