<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\ReminderFactory;

/**
 * Class Reminder
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_user_id
 * @property bool|null   $popup
 * @property bool|null   $email
 * @property bool|null   $email_sent
 * @property string|null $timer_popup
 * @property string|null $timer_email
 * @property string|null $related_event_module
 * @property string      $related_event_module_id
 * @property int|null    $date_willexecute
 * @property bool|null   $popup_viewed
 *
 * @package Joy\VoyagerCrm\Models
 */
class Reminder extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'reminders';
    public $incrementing = false;

    protected $casts = [
        'popup'            => 'bool',
        'email'            => 'bool',
        'email_sent'       => 'bool',
        'date_willexecute' => 'int',
        'popup_viewed'     => 'bool'
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
        'name',
        'modified_by_id',
        'created_by_id',
        'description',
        'assigned_user_id',
        'popup',
        'email',
        'email_sent',
        'timer_popup',
        'timer_email',
        'related_event_module',
        'related_event_module_id',
        'date_willexecute',
        'popup_viewed'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ReminderFactory::new();
    }
}
