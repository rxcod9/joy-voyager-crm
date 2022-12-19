<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AclRole
 * 
 * @property string $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $name
 * @property string|null $description
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class AclRole extends Model
{
	use SoftDeletes;
	use Traits\Uuids;
	use Traits\CreatedModifiedBy;
	// use HasFactory;

	protected $table = 'acl_roles';
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
		'modified_by_id',
		'created_by_id',
		'name',
		'description',
	];
}
