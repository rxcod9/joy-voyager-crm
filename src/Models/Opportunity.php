<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Joy\VoyagerCrm\Database\Factories\OpportunityFactory;

/**
 * Class Opportunity
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
 * @property string|null $opportunity_type
 * @property string|null $campaign_id
 * @property string|null $lead_source
 * @property float|null  $amount
 * @property float|null  $amount_usdollar
 * @property string|null $currency_id
 * @property Carbon|null $date_closed
 * @property string|null $next_step
 * @property string|null $sales_stage
 * @property float|null  $probability
 *
 * @package Joy\VoyagerCrm\Models
 */
class Opportunity extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'opportunities';
    public $incrementing = false;

    protected $casts = [
        'amount'          => 'float',
        'amount_usdollar' => 'float',
        'probability'     => 'float'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_closed'
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
        'opportunity_type',
        'campaign_id',
        'lead_source',
        'amount',
        'amount_usdollar',
        'currency_id',
        'date_closed',
        'next_step',
        'sales_stage',
        'probability'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return OpportunityFactory::new();
    }
}
