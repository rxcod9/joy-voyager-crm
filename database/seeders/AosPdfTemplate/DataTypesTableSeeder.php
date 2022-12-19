<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosPdfTemplate;

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
        $dataType = $this->dataType('slug', 'aos-pdf-templates');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_pdf_templates',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_pdf_template.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_pdf_template.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aos_pdf_template voyager-file-text',
                'model_name'            => Voyager::modelClass('AosPdfTemplate'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosPdfTemplatePolicy',
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
