<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes
};

/**
 * Class AmTasktemplate
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_user_id
 * @property string|null $status
 * @property string|null $priority
 * @property int|null    $percent_complete
 * @property int|null    $predecessors
 * @property bool|null   $milestone_flag
 * @property string|null $relationship_type
 * @property int|null    $task_number
 * @property int|null    $order_number
 * @property int|null    $estimated_effort
 * @property string|null $utilization
 * @property int|null    $duration
 *
 * @package Joy\VoyagerCrm\Models
 */
class AmTasktemplate extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'am_tasktemplates';
    public $incrementing = false;

    protected $casts = [
        'percent_complete' => 'int',
        'predecessors'     => 'int',
        'milestone_flag'   => 'bool',
        'task_number'      => 'int',
        'order_number'     => 'int',
        'estimated_effort' => 'int',
        'duration'         => 'int'
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
        'assigned_user_id',
        'status',
        'priority',
        'percent_complete',
        'predecessors',
        'milestone_flag',
        'relationship_type',
        'task_number',
        'order_number',
        'estimated_effort',
        'utilization',
        'duration'
    ];
}
