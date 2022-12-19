<?php

namespace Joy\VoyagerCrm\Database\Seeders\User;

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
        $dataType = $this->dataType('slug', 'users');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.user.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.user.plural'),
                'icon'                  => 'voyager-bread voyager-crm-user voyager-people',
                'model_name'            => Voyager::modelClass('User'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\UserPolicy',
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
