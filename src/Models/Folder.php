<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Joy\VoyagerCrm\Database\Factories\FolderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Folder
 *
 * @property string      $id
 * @property string|null $name
 * @property string|null $folder_type
 * @property string|null $parent_folder
 * @property bool|null   $has_child
 * @property bool|null   $is_group
 * @property bool|null   $is_dynamic
 * @property string|null $dynamic_query
 * @property string|null $assign_to_id
 * @property string      $created_by
 * @property string      $modified_by
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class Folder extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'folders';
    public $incrementing = false;

    protected $casts = [
        'has_child'  => 'bool',
        'is_group'   => 'bool',
        'is_dynamic' => 'bool',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'folder_type',
        'parent_folder',
        'has_child',
        'is_group',
        'is_dynamic',
        'dynamic_query',
        'assign_to_id',
        'modified_by_id',
        'created_by_id',
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return FolderFactory::new();
    }
}
