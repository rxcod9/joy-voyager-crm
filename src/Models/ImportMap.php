<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\ImportMapFactory;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Model,
    SoftDeletes
};

/**
 * Class ImportMap
 *
 * @property string      $id
 * @property string|null $name
 * @property string|null $source
 * @property string|null $enclosure
 * @property string|null $delimiter
 * @property string|null $module
 * @property string|null $content
 * @property string|null $default_values
 * @property bool|null   $has_header
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $assigned_user_id
 * @property string|null $is_published
 *
 * @package Joy\VoyagerCrm\Models
 */
class ImportMap extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'import_maps';
    public $incrementing = false;

    protected $casts = [
        'has_header' => 'bool',
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
        'name',
        'source',
        'enclosure',
        'delimiter',
        'module',
        'content',
        'default_values',
        'has_header',
        'assigned_user_id',
        'is_published'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return ImportMapFactory::new();
    }
}
