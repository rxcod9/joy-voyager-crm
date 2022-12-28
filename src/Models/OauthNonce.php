<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OauthNonce
 *
 * @property string   $conskey
 * @property string   $nonce
 * @property int|null $nonce_ts
 *
 * @package Joy\VoyagerCrm\Models
 */
class OauthNonce extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'oauth_nonce';
    public $incrementing = false;

    protected $casts = [
        'nonce_ts' => 'int'
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
        'nonce_ts'
    ];
}
