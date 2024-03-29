<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocumentsBug
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $document_id
 * @property string|null $bug_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class DocumentsBug extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'documents_bugs';
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
        'document_id',
        'bug_id'
    ];
}
