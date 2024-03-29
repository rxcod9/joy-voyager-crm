<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\CrmCaseFactory;
use TCG\Voyager\Facades\Voyager;

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
 * @property string|null $assigned_to_id
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
    use Traits\Auditable;
    use HasFactory;

    protected $table      = 'cases';
    public $incrementing  = false;
    protected $auditModel = CasesAudit::class;

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
        'assigned_to_id',
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

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return CrmCaseFactory::new();
    }

    /**
     * Boot function.
     */
    protected static function boot()
    {
        // updating case_number and modified_by_id when model is created
        static::creating(function ($model) {
            if (!$model->isDirty('case_number')) {
                $model->case_number = Voyager::model('CrmCase')->max('case_number') + 1;
            }
        });

        // updating case_number when model is updated
        static::updating(function ($model) {
            if (!$model->isDirty('case_number') && !$model->case_number) {
                $model->case_number = Voyager::model('CrmCase')->max('case_number') + 1;
            }
        });

        parent::boot();
    }
}
