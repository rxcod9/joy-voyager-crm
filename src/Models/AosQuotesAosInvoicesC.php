<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AosQuotesAosInvoicesC
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $aos_quotes77d9_quotes_ida
 * @property string|null $aos_quotes6b83nvoices_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosQuotesAosInvoicesC extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'aos_quotes_aos_invoices_c';
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
        'aos_quotes77d9_quotes_ida',
        'aos_quotes6b83nvoices_idb'
    ];
}
