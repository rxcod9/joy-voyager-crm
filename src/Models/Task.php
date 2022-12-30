<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\TaskFactory;

/**
 * Class Task
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
 * @property string|null $status
 * @property bool|null   $date_due_flag
 * @property Carbon|null $date_due
 * @property bool|null   $date_start_flag
 * @property Carbon|null $date_start
 * @property string|null $parent_type
 * @property string|null $parent_id
 * @property string|null $contact_id
 * @property string|null $priority
 *
 * @package Joy\VoyagerCrm\Models
 */
class Task extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'tasks';
    public $incrementing = false;

    protected $casts = [
        'date_due_flag'   => 'bool',
        'date_start_flag' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_due',
        'date_start'
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
        'status',
        'date_due_flag',
        'date_due',
        'date_start_flag',
        'date_start',
        'parent_type',
        'parent_id',
        'contact_id',
        'priority'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return TaskFactory::new();
    }
}
