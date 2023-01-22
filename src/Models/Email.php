<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\EmailFactory;

/**
 * Class Email
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_to_id
 * @property bool|null   $orphaned
 * @property Carbon|null $last_synced
 * @property Carbon|null $date_sent_received
 * @property string|null $message_id
 * @property string|null $type
 * @property string|null $status
 * @property bool|null   $flagged
 * @property bool|null   $reply_to_status
 * @property string|null $intent
 * @property string|null $mailbox_id
 * @property string|null $parent_type
 * @property string|null $parent_id
 * @property string|null $uid
 * @property string|null $category_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class Email extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'emails';
    public $incrementing = false;

    protected $casts = [
        'orphaned'        => 'bool',
        'flagged'         => 'bool',
        'reply_to_status' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'last_synced',
        'date_sent_received'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'modified_by_id',
        'created_by_id',
        'assigned_to_id',
        'orphaned',
        'last_synced',
        'date_sent_received',
        'message_id',
        'type',
        'status',
        'flagged',
        'reply_to_status',
        'intent',
        'mailbox_id',
        'parent_type',
        'parent_id',
        'uid',
        'category_id'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return EmailFactory::new();
    }
}
