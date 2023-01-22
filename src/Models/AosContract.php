<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\AosContractFactory;

/**
 * Class AosContract
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_to_id
 * @property string|null $reference_code
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 * @property float|null  $total_contract_value
 * @property float|null  $total_contract_value_usdollar
 * @property string|null $currency_id
 * @property string|null $status
 * @property Carbon|null $customer_signed_date
 * @property Carbon|null $company_signed_date
 * @property Carbon|null $renewal_reminder_date
 * @property string|null $contract_type
 * @property string|null $contract_account_id
 * @property string|null $opportunity_id
 * @property string|null $contact_id
 * @property string|null $call_id
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
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosContract extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use Traits\Auditable;
    use HasFactory;

    protected $table     = 'aos_contracts';
    public $incrementing = false;

    protected $casts = [
        'total_contract_value'          => 'float',
        'total_contract_value_usdollar' => 'float',
        'total_amt'                     => 'float',
        'total_amt_usdollar'            => 'float',
        'subtotal_amount'               => 'float',
        'subtotal_amount_usdollar'      => 'float',
        'discount_amount'               => 'float',
        'discount_amount_usdollar'      => 'float',
        'tax_amount'                    => 'float',
        'tax_amount_usdollar'           => 'float',
        'shipping_amount'               => 'float',
        'shipping_amount_usdollar'      => 'float',
        'shipping_tax_amt'              => 'float',
        'shipping_tax_amt_usdollar'     => 'float',
        'total_amount'                  => 'float',
        'total_amount_usdollar'         => 'float'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'start_date',
        'end_date',
        'customer_signed_date',
        'company_signed_date',
        'renewal_reminder_date'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'modified_by_id',
        'created_by_id',
        'description',
        'assigned_to_id',
        'reference_code',
        'start_date',
        'end_date',
        'total_contract_value',
        'total_contract_value_usdollar',
        'currency_id',
        'status',
        'customer_signed_date',
        'company_signed_date',
        'renewal_reminder_date',
        'contract_type',
        'contract_account_id',
        'opportunity_id',
        'contact_id',
        'call_id',
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
        'total_amount_usdollar'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return AosContractFactory::new();
    }
}
