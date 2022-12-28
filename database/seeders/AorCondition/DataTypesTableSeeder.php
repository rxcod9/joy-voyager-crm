<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorCondition;

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
        $dataType = $this->dataType('slug', 'aor-conditions');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aor_conditions',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aor_condition.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aor_condition.plural'),
                'icon'                  => 'fa-solid fa-calculator',
                'model_name'            => Voyager::modelClass('AorCondition'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AorConditionPolicy',
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
