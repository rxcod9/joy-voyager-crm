<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class FoldersRel
 *
 * @property string      $id
 * @property string      $folder_id
 * @property string|null $polymorphic_module
 * @property string      $polymorphic_id
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class FoldersRel extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'folders_rel';
    public $incrementing = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'folder_id',
        'polymorphic_module',
        'polymorphic_id',
    ];
}
