<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\LeadFactory;

/**
 * Class Lead
 *
 * @property string      $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_to_id
 * @property string|null $salutation
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $title
 * @property string|null $photo
 * @property string|null $department
 * @property bool|null   $do_not_call
 * @property string|null $phone_home
 * @property string|null $phone_mobile
 * @property string|null $phone_work
 * @property string|null $phone_other
 * @property string|null $phone_fax
 * @property string|null $lawful_basis
 * @property Carbon|null $date_reviewed
 * @property string|null $lawful_basis_source
 * @property string|null $primary_address_street
 * @property string|null $primary_address_city
 * @property string|null $primary_address_state
 * @property string|null $primary_address_postalcode
 * @property string|null $primary_address_country
 * @property string|null $alt_address_street
 * @property string|null $alt_address_city
 * @property string|null $alt_address_state
 * @property string|null $alt_address_postalcode
 * @property string|null $alt_address_country
 * @property string|null $assistant
 * @property string|null $assistant_phone
 * @property bool|null   $converted
 * @property string|null $refered_by
 * @property string|null $lead_source
 * @property string|null $lead_source_description
 * @property string|null $status
 * @property string|null $status_description
 * @property string|null $reports_to_id
 * @property string|null $account_name
 * @property string|null $account_description
 * @property string|null $contact_id
 * @property string|null $account_id
 * @property string|null $opportunity_id
 * @property string|null $opportunity_name
 * @property string|null $opportunity_amount
 * @property string|null $campaign_id
 * @property Carbon|null $birthdate
 * @property string|null $portal_name
 * @property string|null $portal_app
 * @property string|null $website
 *
 * @package Joy\VoyagerCrm\Models
 */
class Lead extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use Traits\Auditable;
    use HasFactory;

    protected $table     = 'leads';
    public $incrementing = false;

    protected $casts = [
        'do_not_call' => 'bool',
        'converted'   => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_reviewed',
        'birthdate'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'modified_by_id',
        'created_by_id',
        'description',
        'assigned_to_id',
        'salutation',
        'first_name',
        'last_name',
        'title',
        'photo',
        'department',
        'do_not_call',
        'phone_home',
        'phone_mobile',
        'phone_work',
        'phone_other',
        'phone_fax',
        'lawful_basis',
        'date_reviewed',
        'lawful_basis_source',
        'primary_address_street',
        'primary_address_city',
        'primary_address_state',
        'primary_address_postalcode',
        'primary_address_country',
        'alt_address_street',
        'alt_address_city',
        'alt_address_state',
        'alt_address_postalcode',
        'alt_address_country',
        'assistant',
        'assistant_phone',
        'converted',
        'refered_by',
        'lead_source',
        'lead_source_description',
        'status',
        'status_description',
        'reports_to_id',
        'account_name',
        'account_description',
        'contact_id',
        'account_id',
        'opportunity_id',
        'opportunity_name',
        'opportunity_amount',
        'campaign_id',
        'birthdate',
        'portal_name',
        'portal_app',
        'website'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return LeadFactory::new();
    }
}
