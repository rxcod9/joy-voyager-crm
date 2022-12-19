<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Illuminate\Database\Eloquent\{
	Model,
	SoftDeletes
};

/**
 * Class Relationship
 *
 * @property string      $id
 * @property string|null $relationship_name
 * @property string|null $lhs_module
 * @property string|null $lhs_table
 * @property string|null $lhs_key
 * @property string|null $rhs_module
 * @property string|null $rhs_table
 * @property string|null $rhs_key
 * @property string|null $join_table
 * @property string|null $join_key_lhs
 * @property string|null $join_key_rhs
 * @property string|null $relationship_type
 * @property string|null $relationship_role_column
 * @property string|null $relationship_role_column_value
 * @property bool|null   $reverse
 * @property Carbon|null $deleted_at
 *
 * @package Joy\VoyagerCrm\Models
 */
class Relationship extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    // use Traits\CreatedModifiedBy;

    protected $table     = 'relationships';
    public $incrementing = false;

    protected $casts = [
        'reverse' => 'bool',
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
        'relationship_name',
        'lhs_module',
        'lhs_table',
        'lhs_key',
        'rhs_module',
        'rhs_table',
        'rhs_key',
        'join_table',
        'join_key_lhs',
        'join_key_rhs',
        'relationship_type',
        'relationship_role_column',
        'relationship_role_column_value',
        'reverse',
    ];
}
