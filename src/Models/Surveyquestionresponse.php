<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Surveyquestionresponse
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
 * @property string|null $answer
 * @property bool|null   $answer_bool
 * @property Carbon|null $answer_datetime
 * @property string|null $surveyquestion_id
 * @property string|null $surveyresponse_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class Surveyquestionresponse extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    // use HasFactory;

    protected $table     = 'surveyquestionresponses';
    public $incrementing = false;

    protected $casts = [
        'answer_bool' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'answer_datetime'
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
        'answer',
        'answer_bool',
        'answer_datetime',
        'surveyquestion_id',
        'surveyresponse_id'
    ];
}
