<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FpEventsContactsC
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $fp_events_contactsfp_events_ida
 * @property string|null $fp_events_contactscontacts_idb
 * @property string|null $invite_status
 * @property string|null $accept_status
 * @property int|null    $email_responded
 *
 * @package Joy\VoyagerCrm\Models
 */
class FpEventsContactsC extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'fp_events_contacts_c';
    public $incrementing = false;

    protected $casts = [
        'email_responded' => 'int'
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
        'fp_events_contactsfp_events_ida',
        'fp_events_contactscontacts_idb',
        'invite_status',
        'accept_status',
        'email_responded'
    ];
}
