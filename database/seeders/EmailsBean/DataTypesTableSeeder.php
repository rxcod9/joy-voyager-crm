<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailsBean;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'emails-beans');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'emails_beans',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.emails_bean.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.emails_bean.plural'),
                'icon'                  => 'voyager-bread voyager-crm-emails_bean voyager-dot-3',
                'model_name'            => Voyager::modelClass('EmailsBean'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\EmailsBeanPolicy',
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
