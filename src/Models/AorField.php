<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\AorFieldFactory;

/**
 * Class AorField
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
 * @property int|null    $field_order
 * @property string|null $module_path
 * @property string|null $field
 * @property bool|null   $display
 * @property bool|null   $link
 * @property string|null $label
 * @property string|null $field_function
 * @property string|null $sort_by
 * @property string|null $format
 * @property string|null $total
 * @property string|null $sort_order
 * @property bool|null   $group_by
 * @property string|null $group_order
 * @property int|null    $group_display
 *
 * @package Joy\VoyagerCrm\Models
 */
class AorField extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'aor_fields';
    public $incrementing = false;

    protected $casts = [
        'field_order'   => 'int',
        'display'       => 'bool',
        'link'          => 'bool',
        'group_by'      => 'bool',
        'group_display' => 'int'
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
        'field_order',
        'module_path',
        'field',
        'display',
        'link',
        'label',
        'field_function',
        'sort_by',
        'format',
        'total',
        'sort_order',
        'group_by',
        'group_order',
        'group_display'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return AorFieldFactory::new();
    }
}
