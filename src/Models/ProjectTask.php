<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\ProjectTaskFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProjectTask
 *
 * @property string      $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string      $project_id
 * @property int|null    $project_task_id
 * @property string|null $name
 * @property string|null $status
 * @property string|null $relationship_type
 * @property string|null $description
 * @property string|null $predecessors
 * @property Carbon|null $date_start
 * @property int|null    $time_start
 * @property int|null    $time_finish
 * @property Carbon|null $date_finish
 * @property int|null    $duration
 * @property string|null $duration_unit
 * @property int|null    $actual_duration
 * @property int|null    $percent_complete
 * @property Carbon|null $date_due
 * @property Carbon|null $time_due
 * @property int|null    $parent_task_id
 * @property string|null $assigned_user_id
 * @property string|null $modified_by_id
 * @property string|null $priority
 * @property string|null $created_by
 * @property bool|null   $milestone_flag
 * @property int|null    $order_number
 * @property int|null    $task_number
 * @property int|null    $estimated_effort
 * @property int|null    $actual_effort
 * @property Carbon|null $deleted_at
 * @property int|null    $utilization
 *
 * @package Joy\VoyagerCrm\Models
 */
class ProjectTask extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'project_task';
    public $incrementing = false;

    protected $casts = [
        'project_task_id'  => 'int',
        'time_start'       => 'int',
        'time_finish'      => 'int',
        'duration'         => 'int',
        'actual_duration'  => 'int',
        'percent_complete' => 'int',
        'parent_task_id'   => 'int',
        'milestone_flag'   => 'bool',
        'order_number'     => 'int',
        'task_number'      => 'int',
        'estimated_effort' => 'int',
        'actual_effort'    => 'int',
        'utilization'      => 'int'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_start',
        'date_finish',
        'date_due',
        'time_due'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'project_id',
        'project_task_id',
        'name',
        'status',
        'relationship_type',
        'description',
        'predecessors',
        'date_start',
        'time_start',
        'time_finish',
        'date_finish',
        'duration',
        'duration_unit',
        'actual_duration',
        'percent_complete',
        'date_due',
        'time_due',
        'parent_task_id',
        'assigned_user_id',
        'modified_by_id',
        'created_by_id',
        'priority',
        'milestone_flag',
        'order_number',
        'task_number',
        'estimated_effort',
        'actual_effort',
        'utilization'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return ProjectTaskFactory::new();
    }
}
