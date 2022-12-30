<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyquestionresponse;

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
        $dataType = $this->dataType('slug', 'surveyquestionresponses');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'surveyquestionresponses',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.surveyquestionresponse.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.surveyquestionresponse.plural'),
                'icon'                  => 'fa-solid fa-reply-all',
                'model_name'            => Voyager::modelClass('Surveyquestionresponse'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\SurveyquestionresponsePolicy',
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
