<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class AclRolesUser
 * 
 * @property string $id
 * @property string|null $role_id
 * @property string|null $user_id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class AclRolesUser extends Model
{
	use SoftDeletes;
	use Traits\Uuids;
	// use Traits\CreatedModifiedBy;

	protected $table = 'acl_roles_users';
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
		'role_id',
		'user_id',
	];
}
