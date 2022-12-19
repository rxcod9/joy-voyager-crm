<?php

namespace Joy\VoyagerCrm\Database\Seeders\Account;

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
        $dataType = $this->dataType('slug', 'accounts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'accounts',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.account.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.account.plural'),
                'icon'                  => 'voyager-bread voyager-crm-account voyager-people',
                'model_name'            => Voyager::modelClass('Account'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AccountPolicy',
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
