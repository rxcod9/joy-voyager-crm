<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\NoteFactory;

/**
 * Class Note
 *
 * @property string|null $assigned_user_id
 * @property string      $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $name
 * @property string|null $file_mime_type
 * @property string|null $filename
 * @property string|null $parent_type
 * @property string|null $parent_id
 * @property string|null $contact_id
 * @property bool|null   $portal_flag
 * @property bool|null   $embed_flag
 * @property string|null $description
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class Note extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'notes';
    public $incrementing = false;

    protected $casts = [
        'portal_flag' => 'bool',
        'embed_flag'  => 'bool',
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
        'assigned_user_id',
        'modified_by_id',
        'created_by_id',
        'name',
        'file_mime_type',
        'filename',
        'parent_type',
        'parent_id',
        'contact_id',
        'portal_flag',
        'embed_flag',
        'description',
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return NoteFactory::new();
    }
}
