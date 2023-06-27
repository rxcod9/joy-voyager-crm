<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\ReleaseFactory;

/**
 * Class Release
 *
 * @property string      $id
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $name
 * @property int|null    $list_order
 * @property string|null $status
 *
 * @package Joy\VoyagerCrm\Models
 */
class Release extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'releases';
    public $incrementing = false;

    protected $casts = [
        'list_order' => 'int'
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
        'modified_by_id',
        'created_by_id',
        'name',
        'list_order',
        'status'
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return ReleaseFactory::new();
    }
}
