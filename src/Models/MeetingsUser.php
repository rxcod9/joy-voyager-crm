<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class MeetingsUser
 *
 * @property string      $id
 * @property string|null $meeting_id
 * @property string|null $user_id
 * @property string|null $required
 * @property string|null $accept_status
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class MeetingsUser extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'meetings_users';
    public $incrementing = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'meeting_id',
        'user_id',
        'required',
        'accept_status',
    ];
}
