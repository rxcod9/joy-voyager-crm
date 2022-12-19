<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AosProduct
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
 * @property string|null $maincode
 * @property string|null $part_number
 * @property string|null $category
 * @property string|null $type
 * @property float|null  $cost
 * @property float|null  $cost_usdollar
 * @property string|null $currency_id
 * @property float|null  $price
 * @property float|null  $price_usdollar
 * @property string|null $url
 * @property string|null $contact_id
 * @property string|null $product_image
 * @property string|null $aos_product_category_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosProduct extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'aos_products';
    public $incrementing = false;

    protected $casts = [
        'cost'           => 'float',
        'cost_usdollar'  => 'float',
        'price'          => 'float',
        'price_usdollar' => 'float'
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
        'maincode',
        'part_number',
        'category',
        'type',
        'cost',
        'cost_usdollar',
        'currency_id',
        'price',
        'price_usdollar',
        'url',
        'contact_id',
        'product_image',
        'aos_product_category_id'
    ];
}
