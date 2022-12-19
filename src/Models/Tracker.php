<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class Tracker
 *
 * @property int         $id
 * @property string      $monitor_id
 * @property string|null $user_id
 * @property string|null $module_name
 * @property string|null $item_id
 * @property string|null $item_summary
 * @property Carbon|null $updated_at
 * @property string|null $action
 * @property string|null $session_id
 * @property bool|null   $visible
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class Tracker extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table = 'tracker';

    protected $casts = [
        'visible' => 'bool',
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
        'monitor_id',
        'user_id',
        'module_name',
        'item_id',
        'item_summary',
        'updated_at',
        'action',
        'session_id',
        'visible',
        'deleted_at'
    ];
}
