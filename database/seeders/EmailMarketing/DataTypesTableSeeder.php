<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailMarketing;

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
        $dataType = $this->dataType('slug', 'email-marketing');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'email_marketing',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.email_marketing.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.email_marketing.plural'),
                'icon'                  => 'fa-solid fa-bullseye',
                'model_name'            => Voyager::modelClass('EmailMarketing'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\EmailMarketingPolicy',
                // 'controller'            => 'Joy\\VoyagerCrm\\Http\\Controllers\\VoyagerCrmController',
                'generate_permissions'  => 1,
                'description'           => '',
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
