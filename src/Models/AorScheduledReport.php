<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\AorScheduledReportFactory;

/**
 * Class AorScheduledReport
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $schedule
 * @property Carbon|null $last_run
 * @property string|null $status
 * @property string|null $email_recipients
 * @property string|null $aor_report_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class AorScheduledReport extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'aor_scheduled_reports';
    public $incrementing = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'last_run'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'modified_by_id',
        'created_by_id',
        'description',

        'schedule',
        'last_run',
        'status',
        'email_recipients',
        'aor_report_id'
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return AorScheduledReportFactory::new();
    }
}
