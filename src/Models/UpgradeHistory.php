<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class UpgradeHistory
 *
 * @property string      $id
 * @property string|null $filename
 * @property string|null $md5sum
 * @property string|null $type
 * @property string|null $status
 * @property string|null $version
 * @property string|null $name
 * @property string|null $description
 * @property string|null $id_name
 * @property string|null $manifest
 * @property Carbon|null $created_at
 * @property bool|null   $enabled
 *
 * @package Joy\VoyagerCrm\Models
 */
class UpgradeHistory extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'upgrade_history';
    public $incrementing = false;

    protected $casts = [
        'enabled' => 'bool'
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
        'filename',
        'md5sum',
        'type',
        'status',
        'version',
        'name',
        'description',
        'id_name',
        'manifest',
        'enabled'
    ];
}
