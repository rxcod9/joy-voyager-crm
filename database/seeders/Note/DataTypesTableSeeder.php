<?php

namespace Joy\VoyagerCrm\Database\Seeders\Note;

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
        $dataType = $this->dataType('slug', 'notes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'notes',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.note.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.note.plural'),
                'icon'                  => 'fa-solid fa-note-sticky',
                'model_name'            => Voyager::modelClass('Note'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\NotePolicy',
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
