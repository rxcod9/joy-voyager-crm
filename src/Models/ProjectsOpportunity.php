<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProjectsOpportunity
 * 
 * @property string $id
 * @property string|null $opportunity_id
 * @property string|null $project_id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class ProjectsOpportunity extends Model
{
	use SoftDeletes;
	use Traits\Uuids;
	// use Traits\CreatedModifiedBy;

	protected $table = 'projects_opportunities';
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
		'opportunity_id',
		'project_id',
	];
}
