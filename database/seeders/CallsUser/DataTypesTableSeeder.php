<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsUser;

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
        $dataType = $this->dataType('slug', 'calls-users');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'calls_users',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.calls_user.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.calls_user.plural'),
                'icon'                  => 'voyager-bread voyager-crm-calls_user voyager-people',
                'model_name'            => Voyager::modelClass('CallsUser'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\CallsUserPolicy',
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
