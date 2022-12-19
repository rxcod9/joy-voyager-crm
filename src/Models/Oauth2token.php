<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class Oauth2token
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property bool|null   $token_is_revoked
 * @property string|null $token_type
 * @property Carbon|null $access_token_expires
 * @property string|null $access_token
 * @property string|null $refresh_token
 * @property Carbon|null $refresh_token_expires
 * @property string|null $grant_type
 * @property string|null $state
 * @property string|null $client
 * @property string|null $assigned_user_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class Oauth2token extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'oauth2tokens';
    public $incrementing = false;

    protected $casts = [
        'token_is_revoked' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'access_token_expires',
        'refresh_token_expires'
    ];

    protected $hidden = [
        'access_token',
        'refresh_token'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'modified_by_id',
        'created_by_id',
        'description',
        'token_is_revoked',
        'token_type',
        'access_token_expires',
        'access_token',
        'refresh_token',
        'refresh_token_expires',
        'grant_type',
        'state',
        'client',
        'assigned_user_id'
    ];
}
