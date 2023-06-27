<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\AorConditionFactory;

/**
 * Class AorCondition
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
 * @property int|null    $condition_order
 * @property string|null $logic_op
 * @property string|null $parenthesis
 * @property string|null $module_path
 * @property string|null $field
 * @property string|null $operator
 * @property string|null $value_type
 * @property string|null $value
 * @property bool|null   $parameter
 *
 * @package Joy\VoyagerCrm\Models
 */
class AorCondition extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'aor_conditions';
    public $incrementing = false;

    protected $casts = [
        'condition_order' => 'int',
        'parameter'       => 'bool'
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
        'condition_order',
        'logic_op',
        'parenthesis',
        'module_path',
        'field',
        'operator',
        'value_type',
        'value',
        'parameter'
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return AorConditionFactory::new();
    }
}
