<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class AosProductsAudit
 *
 * @property string      $id
 * @property string      $parent_id
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property string|null $field_name
 * @property string|null $data_type
 * @property string|null $before_value_string
 * @property string|null $after_value_string
 * @property string|null $before_value_text
 * @property string|null $after_value_text
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosProductsAudit extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'aos_products_audit';
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
        'parent_id',
        'modified_by_id',
        'created_by_id',
        'field_name',
        'data_type',
        'before_value_string',
        'after_value_string',
        'before_value_text',
        'after_value_text'
    ];
}
