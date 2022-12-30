<?php

namespace Joy\VoyagerCrm\Database\Seeders\Survey;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'surveys');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'surveys',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.survey.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.survey.plural'),
                'icon'                  => 'voyager-bread voyager-crm-survey voyager-check-circle',
                'model_name'            => Voyager::modelClass('Survey'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\SurveyPolicy',
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