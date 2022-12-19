<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class JjwgMapsJjwgMarkersC
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $jjwg_maps_b229wg_maps_ida
 * @property string|null $jjwg_maps_2e31markers_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class JjwgMapsJjwgMarkersC extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'jjwg_maps_jjwg_markers_c';
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
        'jjwg_maps_b229wg_maps_ida',
        'jjwg_maps_2e31markers_idb'
    ];
}
