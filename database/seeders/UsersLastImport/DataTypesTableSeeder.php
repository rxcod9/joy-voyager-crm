<?php

namespace Joy\VoyagerCrm\Database\Seeders\UsersLastImport;

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
        $dataType = $this->dataType('slug', 'users-last-imports');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users_last_imports',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.users_last_import.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.users_last_import.plural'),
                'icon'                  => 'voyager-bread voyager-crm-users_last_import voyager-upload',
                'model_name'            => Voyager::modelClass('UsersLastImport'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\UsersLastImportPolicy',
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
