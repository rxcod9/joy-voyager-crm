<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class Document
 *
 * @property string      $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_user_id
 * @property string|null $document_name
 * @property string|null $doc_id
 * @property string|null $doc_type
 * @property string|null $doc_url
 * @property Carbon|null $active_date
 * @property Carbon|null $exp_date
 * @property string|null $category_id
 * @property string|null $subcategory_id
 * @property string|null $status_id
 * @property string|null $document_revision_id
 * @property string|null $related_doc_id
 * @property string|null $related_doc_rev_id
 * @property bool|null   $is_template
 * @property string|null $template_type
 *
 * @package Joy\VoyagerCrm\Models
 */
class Document extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'documents';
    public $incrementing = false;

    protected $casts = [
        'is_template' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'active_date',
        'exp_date'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'modified_by_id',
        'created_by_id',
        'description',
        'assigned_user_id',
        'document_name',
        'doc_id',
        'doc_type',
        'doc_url',
        'active_date',
        'exp_date',
        'category_id',
        'subcategory_id',
        'status_id',
        'document_revision_id',
        'related_doc_id',
        'related_doc_rev_id',
        'is_template',
        'template_type'
    ];
}
