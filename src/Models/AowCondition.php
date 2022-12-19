<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AowCondition
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $aow_workflow_id
 * @property int|null    $condition_order
 * @property string|null $module_path
 * @property string|null $field
 * @property string|null $operator
 * @property string|null $value_type
 * @property string|null $value
 *
 * @package Joy\VoyagerCrm\Models
 */
class AowCondition extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'aow_conditions';
    public $incrementing = false;

    protected $casts = [
        'condition_order' => 'int'
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
        'modified_by_id',
        'created_by_id',
        'description',

        'aow_workflow_id',
        'condition_order',
        'module_path',
        'field',
        'operator',
        'value_type',
        'value'
    ];
}
