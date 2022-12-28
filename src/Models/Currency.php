<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\CurrencyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Currency
 *
 * @property string      $id
 * @property string|null $name
 * @property string|null $symbol
 * @property string|null $iso4217
 * @property float|null  $conversion_rate
 * @property string|null $status
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string      $created_by
 *
 * @package Joy\VoyagerCrm\Models
 */
class Currency extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'currencies';
    public $incrementing = false;

    protected $casts = [
        'conversion_rate' => 'float',
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
        'symbol',
        'iso4217',
        'decimal',
        'rounding',
        'iso4217',
        'conversion_rate',
        'status',
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
        return CurrencyFactory::new();
    }
}
