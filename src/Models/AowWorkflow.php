<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\AowWorkflowFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AowWorkflow
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
 * @property string|null $flow_module
 * @property string|null $flow_run_on
 * @property string|null $status
 * @property string|null $run_when
 * @property bool|null   $multiple_runs
 * @property bool|null   $run_on_import
 *
 * @package Joy\VoyagerCrm\Models
 */
class AowWorkflow extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use Traits\Auditable;
    use HasFactory;

    protected $table     = 'aow_workflow';
    public $incrementing = false;
    public $auditModel   = AowWorkflowAudit::class;

    protected $casts = [
        'multiple_runs' => 'bool',
        'run_on_import' => 'bool'
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
        'flow_module',
        'flow_run_on',
        'status',
        'run_when',
        'multiple_runs',
        'run_on_import'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return AowWorkflowFactory::new();
    }
}
