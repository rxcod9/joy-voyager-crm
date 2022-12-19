<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class AorChart
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $aor_report_id
 * @property string|null $type
 * @property int|null    $x_field
 * @property int|null    $y_field
 *
 * @package Joy\VoyagerCrm\Models
 */
class AorChart extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'aor_charts';
    public $incrementing = false;

    protected $casts = [
        'x_field' => 'int',
        'y_field' => 'int'
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

        'aor_report_id',
        'type',
        'x_field',
        'y_field'
    ];
}
