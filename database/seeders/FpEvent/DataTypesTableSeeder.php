<?php

namespace Joy\VoyagerCrm\Database\Seeders\FpEvent;

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
        $dataType = $this->dataType('slug', 'fp-events');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'fp_events',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.fp_event.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.fp_event.plural'),
                'icon'                  => 'voyager-bread voyager-crm-fp_event voyager-calendar',
                'model_name'            => Voyager::modelClass('FpEvent'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\FpEventPolicy',
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
