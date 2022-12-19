<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class AclRolesAction
 *
 * @property string      $id
 * @property string|null $role_id
 * @property string|null $action_id
 * @property int|null    $access_override
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class AclRolesAction extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'acl_roles_actions';
    public $incrementing = false;

    protected $casts = [
        'access_override' => 'int',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'role_id',
        'action_id',
        'access_override',
    ];
}
