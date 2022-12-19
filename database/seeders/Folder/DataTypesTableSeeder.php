<?php

namespace Joy\VoyagerCrm\Database\Seeders\Folder;

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
        $dataType = $this->dataType('slug', 'folders');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'folders',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.folder.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.folder.plural'),
                'icon'                  => 'voyager-bread voyager-crm-folder voyager-categories',
                'model_name'            => Voyager::modelClass('Folder'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\FolderPolicy',
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
