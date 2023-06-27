<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\CampaignTrkrFactory;

/**
 * Class CampaignTrkr
 *
 * @property string      $id
 * @property string|null $tracker_name
 * @property string|null $tracker_url
 * @property int         $tracker_key
 * @property string|null $campaign_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property bool|null   $is_optout
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class CampaignTrkr extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'campaign_trkrs';
    public $incrementing = false;

    protected $casts = [
        'tracker_key' => 'int',
        'is_optout'   => 'bool',
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
        'tracker_name',
        'tracker_url',
        'tracker_key',
        'campaign_id',
        'modified_by_id',
        'created_by_id',
        'is_optout',
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return CampaignTrkrFactory::new();
    }
}
