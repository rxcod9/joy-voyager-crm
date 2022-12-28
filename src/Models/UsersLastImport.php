<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UsersLastImport
 *
 * @property string      $id
 * @property string|null $assigned_user_id
 * @property string|null $import_module
 * @property string|null $bean_type
 * @property string|null $bean_id
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class UsersLastImport extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'users_last_import';
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
        'assigned_user_id',
        'import_module',
        'bean_type',
        'bean_id',
    ];
}
