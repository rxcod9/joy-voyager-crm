<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\MeetingFactory;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Model,
    SoftDeletes
};

/**
 * Class Meeting
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
 * @property string|null $location
 * @property string|null $password
 * @property string|null $join_url
 * @property string|null $host_url
 * @property string|null $displayed_url
 * @property string|null $creator
 * @property string|null $external_id
 * @property int|null    $duration_hours
 * @property int|null    $duration_minutes
 * @property Carbon|null $date_start
 * @property Carbon|null $date_end
 * @property string|null $parent_type
 * @property string|null $status
 * @property string|null $type
 * @property string|null $parent_id
 * @property int|null    $reminder_time
 * @property int|null    $email_reminder_time
 * @property bool|null   $email_reminder_sent
 * @property string|null $outlook_id
 * @property int|null    $sequence
 * @property string|null $repeat_type
 * @property int|null    $repeat_interval
 * @property string|null $repeat_dow
 * @property Carbon|null $repeat_until
 * @property int|null    $repeat_count
 * @property string|null $repeat_parent_id
 * @property string|null $recurring_source
 * @property string|null $gsync_id
 * @property int|null    $gsync_lastsync
 *
 * @package Joy\VoyagerCrm\Models
 */
class Meeting extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'meetings';
    public $incrementing = false;

    protected $casts = [
        'duration_hours'      => 'int',
        'duration_minutes'    => 'int',
        'reminder_time'       => 'int',
        'email_reminder_time' => 'int',
        'email_reminder_sent' => 'bool',
        'sequence'            => 'int',
        'repeat_interval'     => 'int',
        'repeat_count'        => 'int',
        'gsync_lastsync'      => 'int'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_start',
        'date_end',
        'repeat_until'
    ];

    protected $hidden = [
        'password'
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
        'location',
        'password',
        'join_url',
        'host_url',
        'displayed_url',
        'creator',
        'external_id',
        'duration_hours',
        'duration_minutes',
        'date_start',
        'date_end',
        'parent_type',
        'status',
        'type',
        'parent_id',
        'reminder_time',
        'email_reminder_time',
        'email_reminder_sent',
        'outlook_id',
        'sequence',
        'repeat_type',
        'repeat_interval',
        'repeat_dow',
        'repeat_until',
        'repeat_count',
        'repeat_parent_id',
        'recurring_source',
        'gsync_id',
        'gsync_lastsync'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return MeetingFactory::new();
    }
}
