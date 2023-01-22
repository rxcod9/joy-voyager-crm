<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AddressBook
 *
 * @property string      $assigned_to_id
 * @property string|null $bean
 * @property string      $bean_id
 *
 * @package Joy\VoyagerCrm\Models
 */
class AddressBook extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'address_book';
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
        'bean',
        'bean_id'
    ];
}
