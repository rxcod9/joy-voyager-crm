<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JjwgMapsJjwgAreasC
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $jjwg_maps_5304wg_maps_ida
 * @property string|null $jjwg_maps_41f2g_areas_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class JjwgMapsJjwgAreasC extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'jjwg_maps_jjwg_areas_c';
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
        'jjwg_maps_5304wg_maps_ida',
        'jjwg_maps_41f2g_areas_idb'
    ];
}
