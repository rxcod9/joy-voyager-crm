<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorChart;

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
        $dataType = $this->dataType('slug', 'aor-charts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aor_charts',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aor_chart.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aor_chart.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aor_chart voyager-bar-chart',
                'model_name'            => Voyager::modelClass('AorChart'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AorChartPolicy',
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
