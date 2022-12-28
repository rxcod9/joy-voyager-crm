<?php

namespace Joy\VoyagerCrm\Database\Seeders\JobQueue;

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
        $dataType = $this->dataType('slug', 'job-queues');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'job_queue',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.job_queue.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.job_queue.plural'),
                'icon'                  => 'fa-solid fa-list-check',
                'model_name'            => Voyager::modelClass('JobQueue'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\JobQueuePolicy',
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
