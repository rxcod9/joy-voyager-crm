<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\DocumentRevisionFactory;

/**
 * Class DocumentRevision
 *
 * @property string      $id
 * @property string|null $change_log
 * @property string|null $document_id
 * @property string|null $doc_id
 * @property string|null $doc_type
 * @property string|null $doc_url
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property string|null $filename
 * @property string|null $file_ext
 * @property string|null $file_mime_type
 * @property string|null $revision
 * @property Carbon|null $deleted_at
 * @property Carbon|null $updated_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class DocumentRevision extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'document_revisions';
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
        'change_log',
        'document_id',
        'doc_id',
        'doc_type',
        'doc_url',
        'modified_by_id',
        'created_by_id',
        'filename',
        'file_ext',
        'file_mime_type',
        'revision',
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return DocumentRevisionFactory::new();
    }
}
