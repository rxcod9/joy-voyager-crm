<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InboundEmailCacheT
 * 
 * @property string $id
 * @property int|null $ie_timestamp
 *
 * @package Joy\VoyagerCrm\Models
 */
class InboundEmailCacheT extends Model
{
	use SoftDeletes;
	use Traits\Uuids;
	// use Traits\CreatedModifiedBy;

	protected $table = 'inbound_email_cache_ts';
	public $incrementing = false;

	protected $casts = [
		'ie_timestamp' => 'int'
	];

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected $fillable = [
		'created_at',
		'updated_at',
		'deleted_at',
		'ie_timestamp'
	];
}
