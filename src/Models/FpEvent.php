<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FpEvent
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
 * @property int|null    $duration_hours
 * @property int|null    $duration_minutes
 * @property Carbon|null $date_start
 * @property Carbon|null $date_end
 * @property float|null  $budget
 * @property string|null $currency_id
 * @property string|null $invite_templates
 * @property string|null $accept_redirect
 * @property string|null $decline_redirect
 * @property string|null $activity_status_type
 *
 * @package Joy\VoyagerCrm\Models
 */
class FpEvent extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'fp_events';
    public $incrementing = false;

    protected $casts = [
        'duration_hours'   => 'int',
        'duration_minutes' => 'int',
        'budget'           => 'float'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_start',
        'date_end'
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
        'duration_hours',
        'duration_minutes',
        'date_start',
        'date_end',
        'budget',
        'currency_id',
        'invite_templates',
        'accept_redirect',
        'decline_redirect',
        'activity_status_type'
    ];
}
