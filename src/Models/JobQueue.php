<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\JobQueueFactory;

/**
 * Class JobQueue
 *
 * @property string|null $assigned_to_id
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $scheduler_id
 * @property Carbon|null $execute_time
 * @property string|null $status
 * @property string|null $resolution
 * @property string|null $message
 * @property string|null $target
 * @property string|null $data
 * @property bool|null   $requeue
 * @property int|null    $retry_count
 * @property int|null    $failure_count
 * @property int|null    $job_delay
 * @property string|null $client
 * @property int|null    $percent_complete
 *
 * @package Joy\VoyagerCrm\Models
 */
class JobQueue extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'job_queue';
    public $incrementing = false;

    protected $casts = [
        'requeue'          => 'bool',
        'retry_count'      => 'int',
        'failure_count'    => 'int',
        'job_delay'        => 'int',
        'percent_complete' => 'int'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'execute_time'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'assigned_to_id',
        'name',
        'scheduler_id',
        'execute_time',
        'status',
        'resolution',
        'message',
        'target',
        'data',
        'requeue',
        'retry_count',
        'failure_count',
        'job_delay',
        'client',
        'percent_complete'
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return JobQueueFactory::new();
    }
}
