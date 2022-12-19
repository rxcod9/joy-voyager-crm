<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Config
 *
 * @property string|null $category
 * @property string|null $name
 * @property string|null $value
 *
 * @package Joy\VoyagerCrm\Models
 */
class Config extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // // use Traits\CreatedModifiedBy;

    protected $table     = 'config';
    public $incrementing = false;

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'category',
        'name',
        'value'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
