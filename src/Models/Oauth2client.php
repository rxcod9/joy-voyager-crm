<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class Oauth2client
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $secret
 * @property string|null $redirect_url
 * @property bool|null   $is_confidential
 * @property string|null $allowed_grant_type
 * @property int|null    $duration_value
 * @property int|null    $duration_amount
 * @property string|null $duration_unit
 * @property string|null $assigned_user_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class Oauth2client extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'oauth2clients';
    public $incrementing = false;

    protected $casts = [
        'is_confidential' => 'bool',
        'duration_value'  => 'int',
        'duration_amount' => 'int'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'secret'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'modified_by_id',
        'created_by_id',
        'description',
        'secret',
        'redirect_url',
        'is_confidential',
        'allowed_grant_type',
        'duration_value',
        'duration_amount',
        'duration_unit',
        'assigned_user_id'
    ];
}
