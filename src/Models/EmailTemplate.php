<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\EmailTemplateFactory;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Model,
    SoftDeletes
};

/**
 * Class EmailTemplate
 *
 * @property string      $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $published
 * @property string|null $name
 * @property string|null $description
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $body_html
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_user_id
 * @property bool|null   $text_only
 * @property string|null $type
 *
 * @package Joy\VoyagerCrm\Models
 */
class EmailTemplate extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'email_templates';
    public $incrementing = false;

    protected $casts = [
        'text_only' => 'bool'
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
        'modified_by_id',
        'created_by_id',
        'published',
        'name',
        'description',
        'subject',
        'body',
        'body_html',
        'assigned_user_id',
        'text_only',
        'type'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return EmailTemplateFactory::new();
    }
}
