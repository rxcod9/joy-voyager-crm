<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\ProspectListFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProspectList
 *
 * @property string|null $assigned_to_id
 * @property string      $id
 * @property string|null $name
 * @property string|null $list_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $description
 * @property string|null $domain_name
 *
 * @package Joy\VoyagerCrm\Models
 */
class ProspectList extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table     = 'prospect_lists';
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
        'assigned_to_id',
        'name',
        'list_type',
        'modified_by_id',
        'created_by_id',
        'description',
        'domain_name'
    ];

    /**
    * Create a new factory instance for the model.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return ProspectListFactory::new();
    }
}
