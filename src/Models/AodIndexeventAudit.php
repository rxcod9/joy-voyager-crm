<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\AodIndexeventAuditFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AodIndexeventAudit
 *
 * @property string      $id
 * @property string      $parent_id
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property string|null $field_name
 * @property string|null $data_type
 * @property string|null $request
 * @property string|null $before_value_string
 * @property string|null $after_value_string
 * @property string|null $before_value_text
 * @property string|null $after_value_text
 *
 * @package Joy\VoyagerCrm\Models
 */
class AodIndexeventAudit extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'aod_indexevent_audit';
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
        'request',
        'step',
        'before_value_string',
        'after_value_string',
        'before_value_text',
        'after_value_text'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return AodIndexeventAuditFactory::new();
    }
}
