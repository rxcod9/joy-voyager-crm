<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes
};

/**
 * Class Case
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
 * @property int         $case_number
 * @property string|null $type
 * @property string|null $status
 * @property string|null $priority
 * @property string|null $resolution
 * @property string|null $work_log
 * @property string|null $account_id
 * @property string|null $state
 * @property string|null $contact_created_by_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class CrmCase extends Model
{
    /** Case is a reserved keyword */
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'cases';
    public $incrementing = false;

    protected $casts = [
        'case_number' => 'int'
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
        'case_number',
        'type',
        'status',
        'priority',
        'resolution',
        'work_log',
        'account_id',
        'state',
        'contact_created_by_id'
    ];
}
