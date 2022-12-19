<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\EmailCacheFactory;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Model,
    SoftDeletes
};

/**
 * Class EmailCache
 *
 * @property string|null $ie_id
 * @property string|null $mbox
 * @property string|null $subject
 * @property string|null $fromaddr
 * @property string|null $toaddr
 * @property Carbon|null $senddate
 * @property string|null $message_id
 * @property int|null    $mailsize
 * @property int|null    $imap_uid
 * @property int|null    $msgno
 * @property int|null    $recent
 * @property int|null    $flagged
 * @property int|null    $answered
 * @property int|null    $deleted
 * @property int|null    $seen
 * @property int|null    $draft
 *
 * @package Joy\VoyagerCrm\Models
 */
class EmailCache extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;
    use HasFactory;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ie_id';

    protected $table     = 'email_cache';
    public $incrementing = false;

    protected $casts = [
        'mailsize' => 'int',
        'imap_uid' => 'int',
        'msgno'    => 'int',
        'recent'   => 'int',
        'flagged'  => 'int',
        'answered' => 'int',
        'deleted'  => 'int',
        'seen'     => 'int',
        'draft'    => 'int'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'senddate'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'ie_id',
        'mbox',
        'subject',
        'fromaddr',
        'toaddr',
        'senddate',
        'message_id',
        'mailsize',
        'imap_uid',
        'msgno',
        'recent',
        'flagged',
        'answered',
        'seen',
        'draft'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return EmailCacheFactory::new();
    }
}
