<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AosQuote
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
 * @property string|null $approval_issue
 * @property string|null $billing_account_id
 * @property string|null $billing_contact_id
 * @property string|null $billing_address_street
 * @property string|null $billing_address_city
 * @property string|null $billing_address_state
 * @property string|null $billing_address_postalcode
 * @property string|null $billing_address_country
 * @property string|null $shipping_address_street
 * @property string|null $shipping_address_city
 * @property string|null $shipping_address_state
 * @property string|null $shipping_address_postalcode
 * @property string|null $shipping_address_country
 * @property Carbon|null $expiration
 * @property int|null    $number
 * @property string|null $opportunity_id
 * @property string|null $template_ddown_c
 * @property float|null  $total_amt
 * @property float|null  $total_amt_usdollar
 * @property float|null  $subtotal_amount
 * @property float|null  $subtotal_amount_usdollar
 * @property float|null  $discount_amount
 * @property float|null  $discount_amount_usdollar
 * @property float|null  $tax_amount
 * @property float|null  $tax_amount_usdollar
 * @property float|null  $shipping_amount
 * @property float|null  $shipping_amount_usdollar
 * @property string|null $shipping_tax
 * @property float|null  $shipping_tax_amt
 * @property float|null  $shipping_tax_amt_usdollar
 * @property float|null  $total_amount
 * @property float|null  $total_amount_usdollar
 * @property string|null $currency_id
 * @property string|null $stage
 * @property string|null $term
 * @property string|null $terms_c
 * @property string|null $approval_status
 * @property string|null $invoice_status
 * @property float|null  $subtotal_tax_amount
 * @property float|null  $subtotal_tax_amount_usdollar
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosQuote extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'aos_quotes';
    public $incrementing = false;

    protected $casts = [
        'number'                       => 'int',
        'total_amt'                    => 'float',
        'total_amt_usdollar'           => 'float',
        'subtotal_amount'              => 'float',
        'subtotal_amount_usdollar'     => 'float',
        'discount_amount'              => 'float',
        'discount_amount_usdollar'     => 'float',
        'tax_amount'                   => 'float',
        'tax_amount_usdollar'          => 'float',
        'shipping_amount'              => 'float',
        'shipping_amount_usdollar'     => 'float',
        'shipping_tax_amt'             => 'float',
        'shipping_tax_amt_usdollar'    => 'float',
        'total_amount'                 => 'float',
        'total_amount_usdollar'        => 'float',
        'subtotal_tax_amount'          => 'float',
        'subtotal_tax_amount_usdollar' => 'float'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'expiration'
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
        'approval_issue',
        'billing_account_id',
        'billing_contact_id',
        'billing_address_street',
        'billing_address_city',
        'billing_address_state',
        'billing_address_postalcode',
        'billing_address_country',
        'shipping_address_street',
        'shipping_address_city',
        'shipping_address_state',
        'shipping_address_postalcode',
        'shipping_address_country',
        'expiration',
        'number',
        'opportunity_id',
        'template_ddown_c',
        'total_amt',
        'total_amt_usdollar',
        'subtotal_amount',
        'subtotal_amount_usdollar',
        'discount_amount',
        'discount_amount_usdollar',
        'tax_amount',
        'tax_amount_usdollar',
        'shipping_amount',
        'shipping_amount_usdollar',
        'shipping_tax',
        'shipping_tax_amt',
        'shipping_tax_amt_usdollar',
        'total_amount',
        'total_amount_usdollar',
        'currency_id',
        'stage',
        'term',
        'terms_c',
        'approval_status',
        'invoice_status',
        'subtotal_tax_amount',
        'subtotal_tax_amount_usdollar'
    ];
}
