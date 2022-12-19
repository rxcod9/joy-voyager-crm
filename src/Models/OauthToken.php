<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OauthToken
 * 
 * @property string $id
 * @property string|null $secret
 * @property string|null $tstate
 * @property string $consumer
 * @property int|null $token_ts
 * @property string|null $verify
 * @property bool $deleted
 * @property string|null $callback_url
 * @property string|null $assigned_user_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class OauthToken extends Model
{
	use SoftDeletes;
	use Traits\Uuids;
	// use Traits\CreatedModifiedBy;

	protected $table = 'oauth_tokens';
	public $incrementing = false;

	protected $casts = [
		'token_ts' => 'int',
	];

	protected $hidden = [
		'secret'
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
		'secret',
		'tstate',
		'consumer',
		'token_ts',
		'verify',
		'callback_url',
		'assigned_user_id'
	];
}
