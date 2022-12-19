<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\SchedulerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Scheduler
 *
 * @property string      $id
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $modified_by_id
 * @property string|null $name
 * @property string|null $job
 * @property Carbon|null $date_time_start
 * @property Carbon|null $date_time_end
 * @property string|null $job_interval
 * @property Carbon|null $time_from
 * @property Carbon|null $time_to
 * @property Carbon|null $last_run
 * @property string|null $status
 * @property bool|null   $catch_up
 *
 * @package Joy\VoyagerCrm\Models
 */
class Scheduler extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'schedulers';
    public $incrementing = false;

    protected $casts = [
        'catch_up' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_time_start',
        'date_time_end',
        'time_from',
        'time_to',
        'last_run'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'modified_by_id',
        'created_by_id',
        'name',
        'job',
        'date_time_start',
        'date_time_end',
        'job_interval',
        'time_from',
        'time_to',
        'last_run',
        'status',
        'catch_up'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return SchedulerFactory::new();
    }
}
