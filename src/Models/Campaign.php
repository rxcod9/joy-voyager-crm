<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\CampaignFactory;

/**
 * Class Campaign
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_user_id
 * @property int         $tracker_key
 * @property int|null    $tracker_count
 * @property string|null $refer_url
 * @property string|null $tracker_text
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 * @property string|null $status
 * @property int|null    $impressions
 * @property string|null $currency_id
 * @property float|null  $budget
 * @property float|null  $expected_cost
 * @property float|null  $actual_cost
 * @property float|null  $expected_revenue
 * @property string|null $campaign_type
 * @property string|null $objective
 * @property string|null $content
 * @property string|null $frequency
 * @property string|null $survey_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class Campaign extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use Traits\Auditable;
    use HasFactory;

    protected $table     = 'campaigns';
    public $incrementing = false;

    protected $casts = [
        'tracker_key'      => 'int',
        'tracker_count'    => 'int',
        'impressions'      => 'int',
        'budget'           => 'float',
        'expected_cost'    => 'float',
        'actual_cost'      => 'float',
        'expected_revenue' => 'float'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'start_date',
        'end_date'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'modified_by_id',
        'created_by_id',
        'assigned_user_id',
        'tracker_key',
        'tracker_count',
        'refer_url',
        'tracker_text',
        'start_date',
        'end_date',
        'status',
        'impressions',
        'currency_id',
        'budget',
        'expected_cost',
        'actual_cost',
        'expected_revenue',
        'campaign_type',
        'objective',
        'content',
        'frequency',
        'survey_id'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return CampaignFactory::new();
    }
}
