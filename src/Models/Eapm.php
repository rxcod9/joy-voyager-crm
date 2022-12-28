<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\EapmFactory;

/**
 * Class Eapm
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_user_id
 * @property string|null $password
 * @property string|null $url
 * @property string|null $application
 * @property string|null $api_data
 * @property string|null $consumer_key
 * @property string|null $consumer_secret
 * @property string|null $oauth_token
 * @property string|null $oauth_secret
 * @property bool|null   $validated
 *
 * @package Joy\VoyagerCrm\Models
 */
class Eapm extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'eapm';
    public $incrementing = false;

    protected $casts = [
        'validated' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'password',
        'consumer_secret',
        'oauth_token',
        'oauth_secret'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'modified_by_id',
        'created_by_id',
        'description',
        'assigned_user_id',
        'password',
        'url',
        'application',
        'api_data',
        'consumer_key',
        'consumer_secret',
        'oauth_token',
        'oauth_secret',
        'validated'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return EapmFactory::new();
    }
}
