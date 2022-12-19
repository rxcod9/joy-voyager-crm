<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class AmProjecttemplatesProject1C
 *
 * @property string      $id
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $am_projecttemplates_project_1am_projecttemplates_ida
 * @property string|null $am_projecttemplates_project_1project_idb
 *
 * @package Joy\VoyagerCrm\Models
 */
class AmProjecttemplatesProject1C extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'am_projecttemplates_project_1_c';
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
        'am_projecttemplates_project_1am_projecttemplates_ida',
        'am_projecttemplates_project_1project_idb'
    ];
}
