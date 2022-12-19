<?php

namespace Joy\VoyagerCrm\Database\Seeders\Templatesectionline;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'templatesectionlines');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'templatesectionline',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.templatesectionline.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.templatesectionline.plural'),
                'icon'                  => 'voyager-bread voyager-crm-templatesectionline voyager-categories',
                'model_name'            => Voyager::modelClass('Templatesectionline'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\TemplatesectionlinePolicy',
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
