<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailCache;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'email-caches');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'email_cache',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.email_cache.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.email_cache.plural'),
                'icon'                  => 'voyager-bread voyager-crm-email_cache voyager-categories',
                'model_name'            => Voyager::modelClass('EmailCache'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\EmailCachePolicy',
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
