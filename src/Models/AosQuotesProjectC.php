<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class AosQuotesProjectC
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $aos_quotes1112_quotes_ida
 * @property string|null $aos_quotes7207project_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosQuotesProjectC extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'aos_quotes_project_c';
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
        'aos_quotes1112_quotes_ida',
        'aos_quotes7207project_idb'
    ];
}
