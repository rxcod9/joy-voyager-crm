<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailTemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'email-templates');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'email_templates',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.email_template.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.email_template.plural'),
                'icon'                  => 'voyager-bread voyager-crm-email_template voyager-file-text',
                'model_name'            => Voyager::modelClass('EmailTemplate'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\EmailTemplatePolicy',
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
