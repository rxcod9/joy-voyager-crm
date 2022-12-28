<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\InboundEmailFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InboundEmail
 *
 * @property string      $id
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $name
 * @property string|null $status
 * @property string|null $server_url
 * @property string|null $email_user
 * @property string|null $email_password
 * @property int|null    $port
 * @property string|null $service
 * @property string|null $mailbox
 * @property bool|null   $delete_seen
 * @property string|null $mailbox_type
 * @property string|null $template_id
 * @property string|null $stored_options
 * @property string|null $group_id
 * @property bool|null   $is_personal
 * @property string|null $groupfolder_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class InboundEmail extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'inbound_email';
    public $incrementing = false;

    protected $casts = [
        'port'        => 'int',
        'delete_seen' => 'bool',
        'is_personal' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'email_password'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'modified_by_id',
        'created_by_id',
        'name',
        'status',
        'server_url',
        'email_user',
        'email_password',
        'port',
        'service',
        'mailbox',
        'delete_seen',
        'mailbox_type',
        'template_id',
        'stored_options',
        'group_id',
        'is_personal',
        'groupfolder_id'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return InboundEmailFactory::new();
    }
}
