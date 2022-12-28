<?php

namespace Joy\VoyagerCrm\Database\Seeders\RemindersInvitee;

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
        $dataType = $this->dataType('slug', 'reminders-invitees');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'reminders_invitees',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.reminders_invitee.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.reminders_invitee.plural'),
                'icon'                  => 'voyager-bread voyager-crm-reminders_invitee voyager-group',
                'model_name'            => Voyager::modelClass('RemindersInvitee'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\RemindersInviteePolicy',
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
