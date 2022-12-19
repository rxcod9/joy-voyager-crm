<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AosQuotesOsContractsC
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $aos_quotese81e_quotes_ida
 * @property string|null $aos_quotes4dc0ntracts_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosQuotesOsContractsC extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'aos_quotes_os_contracts_c';
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
        'aos_quotese81e_quotes_ida',
        'aos_quotes4dc0ntracts_idb'
    ];
}
