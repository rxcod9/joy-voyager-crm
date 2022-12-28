<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AokKnowledgebaseCategory
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $aok_knowledgebase_id
 * @property string|null $aok_knowledgebase_base_categories_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class AokKnowledgebaseCategory extends Pivot
{
    use SoftDeletes;
    // use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table = 'aok_knowledgebase_categories';
    // public $incrementing = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'aok_knowledgebase_id',
        'aok_knowledgebase_base_categories_id'
    ];
}
