<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\SecuritygroupsUserFactory;

/**
 * Class SecuritygroupsUser
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $securitygroup_id
 * @property string|null $user_id
 * @property bool|null   $primary_group
 * @property bool|null   $noninheritable
 *
 * @package Joy\VoyagerCrm\Models
 */
class SecuritygroupsUser extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'securitygroups_users';
    public $incrementing = false;

    protected $casts = [
        'primary_group'  => 'bool',
        'noninheritable' => 'bool'
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
        'securitygroup_id',
        'user_id',
        'primary_group',
        'noninheritable'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return SecuritygroupsUserFactory::new();
    }
}
