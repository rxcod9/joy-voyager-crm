<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContactsCstm
 *
 * @property string      $id_c
 * @property float|null  $jjwg_maps_lng_c
 * @property float|null  $jjwg_maps_lat_c
 * @property string|null $jjwg_maps_geocode_status_c
 * @property string|null $jjwg_maps_address_c
 *
 * @package Joy\VoyagerCrm\Models
 */
class ContactsCstm extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table      = 'contacts_cstm';
    protected $primaryKey = 'id_c';
    public $incrementing  = false;

    protected $casts = [
        'jjwg_maps_lng_c' => 'float',
        'jjwg_maps_lat_c' => 'float'
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
        'jjwg_maps_lng_c',
        'jjwg_maps_lat_c',
        'jjwg_maps_geocode_status_c',
        'jjwg_maps_address_c'
    ];
}