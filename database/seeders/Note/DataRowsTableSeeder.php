<?php

namespace Joy\VoyagerCrm\Database\Seeders\Note;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = Voyager::model('DataType')->where('slug', 'notes')->firstOrFail();
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

        $dataRow = $this->dataRow($dataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.description'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'file_mime_type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.file_mime_type'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'filename');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.filename'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'parent_type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.parent_type'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
                'details'      => [
                    'default' => '',
                    'options' => [
                        ''                                 => 'None',
                        Voyager::modelClass('Account')     => 'Account',
                        Voyager::modelClass('Contact')     => 'Contact',
                        Voyager::modelClass('Opportunity') => 'Opportunity',
                        Voyager::modelClass('Campaign')    => 'Campaign',
                        Voyager::modelClass('Task')        => 'Task',
                        Voyager::modelClass('Email')       => 'Email',

                        Voyager::modelClass('Bug')         => 'Bug',
                        Voyager::modelClass('Project')     => 'Project',
                        Voyager::modelClass('ProjectTask') => 'Project Task',
                        Voyager::modelClass('Prospect')    => 'Target',
                        Voyager::modelClass('CrmCase')     => 'Case',
                        Voyager::modelClass('Lead')        => 'Lead',

                        Voyager::modelClass('Meeting')     => 'Meeting',
                        Voyager::modelClass('Call')        => 'Call',

                        Voyager::modelClass('AosContract') => 'Contract',
                        Voyager::modelClass('AosInvoice')  => 'Invoice',
                        Voyager::modelClass('AosQuote')    => 'Quote',
                        Voyager::modelClass('AosProduct')  => 'Product',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'parent_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.parent_id'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'note_morphto_parent_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.parent'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
                'details'      => [
                    'type'        => 'morphTo',
                    'function'    => 'parentable',
                    'type_column' => 'parent_type',
                    'column'      => 'parent_id',
                    'types'       => [
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.account'),
                            'model'        => Voyager::modelClass('Account'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.contact'),
                            'model'        => Voyager::modelClass('Contact'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.opportunity'),
                            'model'        => Voyager::modelClass('Opportunity'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.campaign'),
                            'model'        => Voyager::modelClass('Campaign'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.task'),
                            'model'        => Voyager::modelClass('Task'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.email'),
                            'model'        => Voyager::modelClass('Email'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.bug'),
                            'model'        => Voyager::modelClass('Bug'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.project'),
                            'model'        => Voyager::modelClass('Project'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.project_task'),
                            'model'        => Voyager::modelClass('ProjectTask'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.prospect'),
                            'model'        => Voyager::modelClass('Prospect'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.crm_case'),
                            'model'        => Voyager::modelClass('CrmCase'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.lead'),
                            'model'        => Voyager::modelClass('Lead'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.meeting'),
                            'model'        => Voyager::modelClass('Meeting'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.call'),
                            'model'        => Voyager::modelClass('Call'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.aos_contract'),
                            'model'        => Voyager::modelClass('AosContract'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.aos_invoice'),
                            'model'        => Voyager::modelClass('AosInvoice'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.aos_quote'),
                            'model'        => Voyager::modelClass('AosQuote'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.aos_product'),
                            'model'        => Voyager::modelClass('AosProduct'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ]
                    ]
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'note_belongsto_contact_relationship');
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

        $dataRow = $this->dataRow($dataType, 'portal_flag');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.portal_flag'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'embed_flag');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.embed_flag'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'note_belongsto_assigned_to_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.assigned_to'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => ++$order,
                'details'      => [
                    'model'       => Voyager::modelClass('User'),
                    'table'       => 'users',
                    'type'        => 'belongsTo',
                    'column'      => 'assigned_to_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'users',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'assigned_to_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.assigned_to_id'),
                'required'     => 1,
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

        $dataRow = $this->dataRow($dataType, 'note_belongsto_created_by_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.created_by'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => ++$order,
                'details'      => [
                    'model'       => Voyager::modelClass('User'),
                    'table'       => 'users',
                    'type'        => 'belongsTo',
                    'column'      => 'created_by_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'users',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'created_by_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.created_by'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'note_belongsto_modified_by_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.modified_by'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => ++$order,
                'details'      => [
                    'model'       => Voyager::modelClass('User'),
                    'table'       => 'users',
                    'type'        => 'belongsTo',
                    'column'      => 'modified_by_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'users',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'modified_by_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.modified_by'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
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
