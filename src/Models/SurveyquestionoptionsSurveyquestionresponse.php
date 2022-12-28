<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SurveyquestionoptionsSurveyquestionresponse
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $surveyq72c7options_ida
 * @property string|null $surveyq10d4sponses_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class SurveyquestionoptionsSurveyquestionresponse extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'surveyquestionoptions_surveyquestionresponses';
    public $incrementing = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'surveyq72c7options_ida',
        'surveyq10d4sponses_idb'
    ];
}
