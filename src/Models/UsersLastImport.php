<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\UsersLastImportFactory;

/**
 * Class UsersLastImport
 *
 * @property string      $id
 * @property string|null $assigned_to_id
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
    use HasFactory;

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
        'assigned_to_id',
        'import_module',
        'bean_type',
        'bean_id',
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return UsersLastImportFactory::new();
    }
}
