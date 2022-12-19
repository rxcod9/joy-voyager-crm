<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CronRemoveDocument
 *
 * @property string      $id
 * @property string|null $bean_id
 * @property string|null $module
 * @property Carbon|null $updated_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class CronRemoveDocument extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'cron_remove_documents';
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
        'bean_id',
        'module',
    ];
}
