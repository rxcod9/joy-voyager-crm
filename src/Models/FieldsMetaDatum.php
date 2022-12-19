<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class FieldsMetaDatum
 *
 * @property string      $id
 * @property string|null $name
 * @property string|null $vname
 * @property string|null $comments
 * @property string|null $help
 * @property string|null $custom_module
 * @property string|null $type
 * @property int|null    $len
 * @property bool|null   $required
 * @property string|null $default_value
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property bool|null   $audited
 * @property bool|null   $massupdate
 * @property int|null    $duplicate_merge
 * @property bool|null   $reportable
 * @property string|null $importable
 * @property string|null $ext1
 * @property string|null $ext2
 * @property string|null $ext3
 * @property string|null $ext4
 *
 * @package Joy\VoyagerCrm\Models
 */
class FieldsMetaDatum extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'fields_meta_data';
    public $incrementing = false;

    protected $casts = [
        'len'             => 'int',
        'required'        => 'bool',
        'audited'         => 'bool',
        'massupdate'      => 'bool',
        'duplicate_merge' => 'int',
        'reportable'      => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'vname',
        'comments',
        'help',
        'custom_module',
        'type',
        'len',
        'required',
        'default_value',
        'audited',
        'massupdate',
        'duplicate_merge',
        'reportable',
        'importable',
        'ext1',
        'ext2',
        'ext3',
        'ext4'
    ];
}
