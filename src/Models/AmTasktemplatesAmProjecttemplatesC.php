<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes
};

/**
 * Class AmTasktemplatesAmProjecttemplatesC
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $am_tasktemplates_am_projecttemplatesam_projecttemplates_ida
 * @property string|null $am_tasktemplates_am_projecttemplatesam_tasktemplates_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class AmTasktemplatesAmProjecttemplatesC extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'am_tasktemplates_am_projecttemplates_c';
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
        'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida',
        'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb'
    ];
}
