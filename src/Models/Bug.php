<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\BugFactory;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Model,
    SoftDeletes
};

/**
 * Class Bug
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
 * @property int         $bug_number
 * @property string|null $type
 * @property string|null $status
 * @property string|null $priority
 * @property string|null $resolution
 * @property string|null $work_log
 * @property string|null $found_in_release
 * @property string|null $fixed_in_release
 * @property string|null $source
 * @property string|null $product_category
 *
 * @package Joy\VoyagerCrm\Models
 */
class Bug extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'bugs';
    public $incrementing = false;

    protected $casts = [
        'bug_number' => 'int'
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
        'name',
        'modified_by_id',
        'created_by_id',
        'description',
        'assigned_user_id',
        'bug_number',
        'type',
        'status',
        'priority',
        'resolution',
        'work_log',
        'found_in_release',
        'fixed_in_release',
        'source',
        'product_category'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return BugFactory::new();
    }
}
