<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AosLineItemGroup
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_user_id
 * @property float|null  $total_amt
 * @property float|null  $total_amt_usdollar
 * @property float|null  $discount_amount
 * @property float|null  $discount_amount_usdollar
 * @property float|null  $subtotal_amount
 * @property float|null  $subtotal_amount_usdollar
 * @property float|null  $tax_amount
 * @property float|null  $tax_amount_usdollar
 * @property float|null  $subtotal_tax_amount
 * @property float|null  $subtotal_tax_amount_usdollar
 * @property float|null  $total_amount
 * @property float|null  $total_amount_usdollar
 * @property string|null $parent_type
 * @property string|null $parent_id
 * @property int|null    $number
 * @property string|null $currency_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosLineItemGroup extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'aos_line_item_groups';
    public $incrementing = false;

    protected $casts = [
        'total_amt'                    => 'float',
        'total_amt_usdollar'           => 'float',
        'discount_amount'              => 'float',
        'discount_amount_usdollar'     => 'float',
        'subtotal_amount'              => 'float',
        'subtotal_amount_usdollar'     => 'float',
        'tax_amount'                   => 'float',
        'tax_amount_usdollar'          => 'float',
        'subtotal_tax_amount'          => 'float',
        'subtotal_tax_amount_usdollar' => 'float',
        'total_amount'                 => 'float',
        'total_amount_usdollar'        => 'float',
        'number'                       => 'int'
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
        'modified_by_id',
        'created_by_id',
        'description',
        'assigned_user_id',
        'total_amt',
        'total_amt_usdollar',
        'discount_amount',
        'discount_amount_usdollar',
        'subtotal_amount',
        'subtotal_amount_usdollar',
        'tax_amount',
        'tax_amount_usdollar',
        'subtotal_tax_amount',
        'subtotal_tax_amount_usdollar',
        'total_amount',
        'total_amount_usdollar',
        'parent_type',
        'parent_id',
        'number',
        'currency_id'
    ];
}
