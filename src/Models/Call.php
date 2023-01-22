<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\CallFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Call
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_to_id
 * @property int|null    $duration_hours
 * @property int|null    $duration_minutes
 * @property Carbon|null $date_start
 * @property Carbon|null $date_end
 * @property string|null $parent_type
 * @property string|null $status
 * @property string|null $direction
 * @property string|null $parent_id
 * @property int|null    $reminder_time
 * @property int|null    $email_reminder_time
 * @property bool|null   $email_reminder_sent
 * @property string|null $outlook_id
 * @property string|null $repeat_type
 * @property int|null    $repeat_interval
 * @property string|null $repeat_dow
 * @property Carbon|null $repeat_until
 * @property int|null    $repeat_count
 * @property string|null $repeat_parent_id
 * @property string|null $recurring_source
 *
 * @package Joy\VoyagerCrm\Models
 */
class Call extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'calls';
    public $incrementing = false;

    protected $casts = [
        'duration_hours'      => 'int',
        'duration_minutes'    => 'int',
        'reminder_time'       => 'int',
        'email_reminder_time' => 'int',
        'email_reminder_sent' => 'bool',
        'repeat_interval'     => 'int',
        'repeat_count'        => 'int'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_start',
        'date_end',
        'repeat_until'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'modified_by_id',
        'created_by_id',
        'description',
        'assigned_to_id',
        'duration_hours',
        'duration_minutes',
        'date_start',
        'date_end',
        'parent_type',
        'status',
        'direction',
        'parent_id',
        'reminder_time',
        'email_reminder_time',
        'email_reminder_sent',
        'outlook_id',
        'repeat_type',
        'repeat_interval',
        'repeat_dow',
        'repeat_until',
        'repeat_count',
        'repeat_parent_id',
        'recurring_source'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return CallFactory::new();
    }
}
