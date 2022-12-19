<?php

namespace Joy\VoyagerCrm\Database\Seeders\UserPreference;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'user-preferences');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'user_preferences',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.user_preference.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.user_preference.plural'),
                'icon'                  => 'voyager-bread voyager-crm-user_preference voyager-categories',
                'model_name'            => Voyager::modelClass('UserPreference'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\UserPreferencePolicy',
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
