<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Database\Factories\EmailMarketingFactory;

/**
 * Class EmailMarketing
 *
 * @property string      $id
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $name
 * @property string|null $from_name
 * @property string|null $from_addr
 * @property string|null $reply_to_name
 * @property string|null $reply_to_addr
 * @property string|null $inbound_email_id
 * @property Carbon|null $date_start
 * @property string      $template_id
 * @property string|null $status
 * @property string|null $campaign_id
 * @property string|null $outbound_email_id
 * @property bool|null   $all_prospect_lists
 *
 * @package Joy\VoyagerCrm\Models
 */
class EmailMarketing extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'email_marketing';
    public $incrementing = false;

    protected $casts = [
        'all_prospect_lists' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'date_start'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'modified_by_id',
        'created_by_id',
        'name',
        'from_name',
        'from_addr',
        'reply_to_name',
        'reply_to_addr',
        'inbound_email_id',
        'date_start',
        'template_id',
        'status',
        'campaign_id',
        'outbound_email_id',
        'all_prospect_lists'
    ];

    /**
    * Create a new factory instance for the model.
    *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return EmailMarketingFactory::new();
    }
}
