<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AosProductsQuote
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
 * @property string|null $currency_id
 * @property string|null $part_number
 * @property string|null $item_description
 * @property int|null    $number
 * @property float|null  $product_qty
 * @property float|null  $product_cost_price
 * @property float|null  $product_cost_price_usdollar
 * @property float|null  $product_list_price
 * @property float|null  $product_list_price_usdollar
 * @property float|null  $product_discount
 * @property float|null  $product_discount_usdollar
 * @property float|null  $product_discount_amount
 * @property float|null  $product_discount_amount_usdollar
 * @property string|null $discount
 * @property float|null  $product_unit_price
 * @property float|null  $product_unit_price_usdollar
 * @property float|null  $vat_amt
 * @property float|null  $vat_amt_usdollar
 * @property float|null  $product_total_price
 * @property float|null  $product_total_price_usdollar
 * @property string|null $vat
 * @property string|null $parent_type
 * @property string|null $parent_id
 * @property string|null $product_id
 * @property string|null $group_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosProductsQuote extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'aos_products_quotes';
    public $incrementing = false;

    protected $casts = [
        'number'                           => 'int',
        'product_qty'                      => 'float',
        'product_cost_price'               => 'float',
        'product_cost_price_usdollar'      => 'float',
        'product_list_price'               => 'float',
        'product_list_price_usdollar'      => 'float',
        'product_discount'                 => 'float',
        'product_discount_usdollar'        => 'float',
        'product_discount_amount'          => 'float',
        'product_discount_amount_usdollar' => 'float',
        'product_unit_price'               => 'float',
        'product_unit_price_usdollar'      => 'float',
        'vat_amt'                          => 'float',
        'vat_amt_usdollar'                 => 'float',
        'product_total_price'              => 'float',
        'product_total_price_usdollar'     => 'float'
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
        'currency_id',
        'part_number',
        'item_description',
        'number',
        'product_qty',
        'product_cost_price',
        'product_cost_price_usdollar',
        'product_list_price',
        'product_list_price_usdollar',
        'product_discount',
        'product_discount_usdollar',
        'product_discount_amount',
        'product_discount_amount_usdollar',
        'discount',
        'product_unit_price',
        'product_unit_price_usdollar',
        'vat_amt',
        'vat_amt_usdollar',
        'product_total_price',
        'product_total_price_usdollar',
        'vat',
        'parent_type',
        'parent_id',
        'product_id',
        'group_id'
    ];
}
