<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class FpEventLocationsFpEvents1C
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $fp_event_locations_fp_events_1fp_event_locations_ida
 * @property string|null $fp_event_locations_fp_events_1fp_events_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class FpEventLocationsFpEvents1C extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'fp_event_locations_fp_events_1_c';
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
        'fp_event_locations_fp_events_1fp_event_locations_ida',
        'fp_event_locations_fp_events_1fp_events_idb'
    ];
}
