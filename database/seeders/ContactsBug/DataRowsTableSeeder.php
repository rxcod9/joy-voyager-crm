<?php

namespace Joy\VoyagerCrm\Database\Seeders\ContactsBug;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataRow;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = Voyager::model('DataType')->where('slug', 'contacts-bugs')->firstOrFail();
        $order    = Voyager::model('DataRow')->whereDataTypeId($dataType->id)->max('order') ?? 0;

        $dataRow = $this->dataRow($dataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'contacts_bug_belongsto_contact_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.contact'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => ++$order,
                'details'      => [
                    'model'       => Voyager::modelClass('Contact'),
                    'table'       => 'contacts',
                    'type'        => 'belongsTo',
                    'column'      => 'contact_id',
                    'key'         => 'id',
                    'label'       => 'first_name',
                    'pivot_table' => 'contacts',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'contact_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.contact_id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'contacts_bug_belongsto_bug_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.bug'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => ++$order,
                'details'      => [
                    'model'       => Voyager::modelClass('Bug'),
                    'table'       => 'bugs',
                    'type'        => 'belongsTo',
                    'column'      => 'bug_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'bugs',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'bug_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.bug_id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'contact_role');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.contact_role'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.deleted_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => ++$order,
            ])->save();
        }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return Voyager::model('DataRow')->firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
