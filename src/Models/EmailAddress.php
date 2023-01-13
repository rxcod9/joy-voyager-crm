<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\EmailAddressFactory;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Model,
    SoftDeletes
};

/**
 * Class EmailAddress
 *
 * @property string      $id
 * @property string|null $email_address
 * @property string|null $email_address_caps
 * @property bool|null   $invalid_email
 * @property bool|null   $opt_out
 * @property string|null $confirm_opt_in
 * @property Carbon|null $confirm_opt_in_date
 * @property Carbon|null $confirm_opt_in_sent_date
 * @property Carbon|null $confirm_opt_in_fail_date
 * @property string|null $confirm_opt_in_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class EmailAddress extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'email_addresses';
    public $incrementing = false;

    protected $casts = [
        'invalid_email' => 'bool',
        'opt_out'       => 'bool',
    ];

    protected $dates = [
        'confirm_opt_in_date',
        'confirm_opt_in_sent_date',
        'confirm_opt_in_fail_date',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'confirm_opt_in_token'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'email_address',
        'email_address_caps',
        'invalid_email',
        'opt_out',
        'confirm_opt_in',
        'confirm_opt_in_date',
        'confirm_opt_in_sent_date',
        'confirm_opt_in_fail_date',
        'confirm_opt_in_token',
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return EmailAddressFactory::new();
    }
}
