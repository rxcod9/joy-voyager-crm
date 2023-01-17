<?php

namespace Joy\VoyagerCrm\Database\Seeders\Release;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'releases');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'releases',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.release.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.release.plural'),
                'icon'                  => 'voyager-bread voyager-crm-release voyager-lightbulb',
                'model_name'            => Voyager::modelClass('Release'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\ReleasePolicy',
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
