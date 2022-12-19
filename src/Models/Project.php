<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\ProjectFactory;

/**
 * Class Project
 *
 * @property string      $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $assigned_user_id
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $name
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property Carbon|null $estimated_start_date
 * @property Carbon|null $estimated_end_date
 * @property string|null $status
 * @property string|null $priority
 * @property bool|null   $override_business_hours
 *
 * @package Joy\VoyagerCrm\Models
 */
class Project extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'project';
    public $incrementing = false;

    protected $casts = [
        'override_business_hours' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'estimated_start_date',
        'estimated_end_date'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'assigned_user_id',
        'modified_by_id',
        'created_by_id',
        'name',
        'description',
        'estimated_start_date',
        'estimated_end_date',
        'status',
        'priority',
        'override_business_hours'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return ProjectFactory::new();
    }
}
