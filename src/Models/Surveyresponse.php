<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\SurveyresponseFactory;

/**
 * Class Surveyresponse
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_to_id
 * @property int|null    $happiness
 * @property bool|null   $email_response_sent
 * @property string|null $account_id
 * @property string|null $campaign_id
 * @property string|null $contact_id
 * @property string|null $survey_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class Surveyresponse extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use Traits\Auditable;
    use HasFactory;

    protected $table     = 'surveyresponses';
    public $incrementing = false;

    protected $casts = [
        'happiness'           => 'int',
        'email_response_sent' => 'bool'
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
        'assigned_to_id',
        'happiness',
        'email_response_sent',
        'account_id',
        'campaign_id',
        'contact_id',
        'survey_id'
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return SurveyresponseFactory::new();
    }
}
