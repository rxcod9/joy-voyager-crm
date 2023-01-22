<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\OutboundEmailFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OutboundEmail
 *
 * @property string      $id
 * @property string|null $name
 * @property string|null $type
 * @property string      $user_id
 * @property string|null $smtp_from_name
 * @property string|null $smtp_from_addr
 * @property string|null $mail_sendtype
 * @property string|null $mail_smtptype
 * @property string|null $mail_smtpserver
 * @property string|null $mail_smtpport
 * @property string|null $mail_smtpuser
 * @property string|null $mail_smtppass
 * @property bool|null   $mail_smtpauth_req
 * @property string|null $mail_smtpssl
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_to_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class OutboundEmail extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use Traits\Auditable;
    use HasFactory;

    protected $table      = 'outbound_email';
    public $incrementing  = false;
    protected $auditModel = OutboundEmailAudit::class;

    protected $casts = [
        'mail_smtpauth_req' => 'bool',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'mail_smtppass'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'type',
        'user_id',
        'smtp_from_name',
        'smtp_from_addr',
        'mail_sendtype',
        'mail_smtptype',
        'mail_smtpserver',
        'mail_smtpport',
        'mail_smtpuser',
        'mail_smtppass',
        'mail_smtpauth_req',
        'mail_smtpssl',
        'modified_by_id',
        'created_by_id',
        'assigned_to_id'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return OutboundEmailFactory::new();
    }
}
