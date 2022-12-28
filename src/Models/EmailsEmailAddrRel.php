<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmailsEmailAddrRel
 *
 * @property string      $id
 * @property string      $email_id
 * @property string|null $address_type
 * @property string      $email_address_id
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class EmailsEmailAddrRel extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'emails_email_addr_rel';
    public $incrementing = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'email_id',
        'address_type',
        'email_address_id',
    ];
}
