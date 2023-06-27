<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\CampaignLogFactory;

/**
 * Class CampaignLog
 *
 * @property string      $id
 * @property string|null $campaign_id
 * @property string|null $target_tracker_key
 * @property string|null $target_id
 * @property string|null $target_type
 * @property string|null $activity_type
 * @property Carbon|null $activity_date
 * @property string|null $related_id
 * @property string|null $related_type
 * @property bool|null   $archived
 * @property int|null    $hits
 * @property string|null $list_id
 * @property Carbon|null $deleted_at
 * @property Carbon|null $updated_at
 * @property string|null $more_information
 * @property string|null $marketing_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class CampaignLog extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'campaign_log';
    public $incrementing = false;

    protected $casts = [
        'archived' => 'bool',
        'hits'     => 'int',
    ];

    protected $dates = [
        'activity_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'campaign_id',
        'target_tracker_key',
        'target_id',
        'target_type',
        'activity_type',
        'activity_date',
        'related_id',
        'related_type',
        'archived',
        'hits',
        'list_id',
        'more_information',
        'marketing_id'
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return CampaignLogFactory::new();
    }
}
