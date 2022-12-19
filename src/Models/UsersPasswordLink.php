<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UsersPasswordLink
 *
 * @property string      $id
 * @property string|null $keyhash
 * @property string|null $user_id
 * @property string|null $username
 * @property Carbon|null $date_generated
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class UsersPasswordLink extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'users_password_link';
    public $incrementing = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_generated'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'keyhash',
        'user_id',
        'username',
        'date_generated',
    ];
}
