<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\AccountFactory;

use Illuminate\Database\Eloquent\{
	Factories\HasFactory,
	Model,
	SoftDeletes
};

/**
 * Class Account
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
 * @property string|null $account_type
 * @property string|null $industry
 * @property string|null $annual_revenue
 * @property string|null $phone_fax
 * @property string|null $billing_address_street
 * @property string|null $billing_address_city
 * @property string|null $billing_address_state
 * @property string|null $billing_address_postalcode
 * @property string|null $billing_address_country
 * @property string|null $rating
 * @property string|null $phone_office
 * @property string|null $phone_alternate
 * @property string|null $website
 * @property string|null $ownership
 * @property string|null $employees
 * @property string|null $ticker_symbol
 * @property string|null $shipping_address_street
 * @property string|null $shipping_address_city
 * @property string|null $shipping_address_state
 * @property string|null $shipping_address_postalcode
 * @property string|null $shipping_address_country
 * @property string|null $parent_id
 * @property string|null $sic_code
 * @property string|null $campaign_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class Account extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'accounts';
    public $incrementing = false;

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
        'deleted_at',
        'assigned_user_id',
        'account_type',
        'industry',
        'annual_revenue',
        'phone_fax',
        'billing_address_street',
        'billing_address_city',
        'billing_address_state',
        'billing_address_postalcode',
        'billing_address_country',
        'rating',
        'phone_office',
        'phone_alternate',
        'website',
        'ownership',
        'employees',
        'ticker_symbol',
        'shipping_address_street',
        'shipping_address_city',
        'shipping_address_state',
        'shipping_address_postalcode',
        'shipping_address_country',
        'parent_id',
        'sic_code',
        'campaign_id'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return AccountFactory::new();
    }
}
