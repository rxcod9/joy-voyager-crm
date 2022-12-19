<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\JjwgMarkerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JjwgMarker
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
 * @property string|null $city
 * @property string|null $state
 * @property string|null $country
 * @property float|null  $jjwg_maps_lat
 * @property float|null  $jjwg_maps_lng
 * @property string|null $marker_image
 *
 * @package Joy\VoyagerCrm\Models
 */
class JjwgMarker extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'jjwg_markers';
    public $incrementing = false;

    protected $casts = [
        'jjwg_maps_lat' => 'float',
        'jjwg_maps_lng' => 'float'
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
        'city',
        'state',
        'country',
        'jjwg_maps_lat',
        'jjwg_maps_lng',
        'marker_image'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return JjwgMarkerFactory::new();
    }
}
