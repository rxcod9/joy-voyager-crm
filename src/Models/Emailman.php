<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Emailman
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $user_id
 * @property int         $id
 * @property string|null $campaign_id
 * @property string|null $marketing_id
 * @property string|null $list_id
 * @property Carbon|null $send_date_time
 * @property string|null $modified_by_id
 * @property bool|null   $in_queue
 * @property Carbon|null $in_queue_date
 * @property int|null    $send_attempts
 * @property Carbon|null $deleted_at
 * @property string|null $related_id
 * @property string|null $related_type
 * @property bool|null   $related_confirm_opt_in
 *
 * @package Joy\VoyagerCrm\Models
 */
class Emailman extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table = 'emailman';

    protected $casts = [
        'in_queue'               => 'bool',
        'send_attempts'          => 'int',
        'related_confirm_opt_in' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'send_date_time',
        'in_queue_date'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'user_id',
        'campaign_id',
        'marketing_id',
        'list_id',
        'send_date_time',
        'modified_by_id',
        'created_by_id',
        'in_queue',
        'in_queue_date',
        'send_attempts',
        'related_id',
        'related_type',
        'related_confirm_opt_in'
    ];
}
