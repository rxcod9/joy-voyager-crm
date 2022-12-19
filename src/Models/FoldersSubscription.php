<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes
};

/**
 * Class FoldersSubscription
 *
 * @property string $id
 * @property string $folder_id
 * @property string $assigned_user_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class FoldersSubscription extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'folders_subscriptions';
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
        'assigned_user_id'
    ];
}
