<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorScheduledReport;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aor-scheduled-reports');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aor_scheduled_reports',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aor_scheduled_report.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aor_scheduled_report.plural'),
                'icon'                  => 'fa-solid fa-clock',
                'model_name'            => Voyager::modelClass('AorScheduledReport'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AorScheduledReportPolicy',
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
