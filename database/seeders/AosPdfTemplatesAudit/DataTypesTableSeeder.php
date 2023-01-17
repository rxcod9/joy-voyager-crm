<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosPdfTemplatesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aos-pdf-templates-audit');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_pdf_templates_audit',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_pdf_templates_audit.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_pdf_templates_audit.plural'),
                'icon'                  => 'fas fa-history',
                'model_name'            => Voyager::modelClass('AosPdfTemplatesAudit'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosPdfTemplatesAuditPolicy',
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
