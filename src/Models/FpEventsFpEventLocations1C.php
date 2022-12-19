<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FpEventsFpEventLocations1C
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $fp_events_fp_event_locations_1fp_events_ida
 * @property string|null $fp_events_fp_event_locations_1fp_event_locations_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class FpEventsFpEventLocations1C extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'fp_events_fp_event_locations_1_c';
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
        'fp_events_fp_event_locations_1fp_events_ida',
        'fp_events_fp_event_locations_1fp_event_locations_idb'
    ];
}
