<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmailsText
 *
 * @property string      $email_id
 * @property string|null $from_addr
 * @property string|null $reply_to_addr
 * @property string|null $to_addrs
 * @property string|null $cc_addrs
 * @property string|null $bcc_addrs
 * @property string|null $description
 * @property string|null $description_html
 * @property string|null $raw_source
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class EmailsText extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table      = 'emails_text';
    protected $primaryKey = 'email_id';
    public $incrementing  = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'from_addr',
        'reply_to_addr',
        'to_addrs',
        'cc_addrs',
        'bcc_addrs',
        'description',
        'description_html',
        'raw_source',
    ];
}
