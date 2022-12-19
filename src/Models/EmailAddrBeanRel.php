<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class EmailAddrBeanRel
 *
 * @property string      $id
 * @property string      $email_address_id
 * @property string      $bean_id
 * @property string|null $bean_module
 * @property bool|null   $primary_address
 * @property bool|null   $reply_to_address
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class EmailAddrBeanRel extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'email_addr_bean_rel';
    public $incrementing = false;

    protected $casts = [
        'primary_address'  => 'bool',
        'reply_to_address' => 'bool',
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
        'email_address_id',
        'bean_id',
        'bean_module',
        'primary_address',
        'reply_to_address',
    ];
}
