<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\UserFactory;

use Illuminate\Database\Eloquent\{
	Factories\HasFactory,
	Builder,
	SoftDeletes
};

/**
 * Class User
 *
 * @property string      $id
 * @property string|null $user_name
 * @property string|null $user_hash
 * @property bool|null   $system_generated_password
 * @property Carbon|null $pwd_last_changed
 * @property string|null $authenticate_id
 * @property bool|null   $sugar_login
 * @property string|null $first_name
 * @property string|null $last_name
 * @property bool|null   $is_admin
 * @property bool|null   $external_auth_only
 * @property bool|null   $receive_notifications
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $title
 * @property string|null $photo
 * @property string|null $department
 * @property string|null $phone_home
 * @property string|null $phone_mobile
 * @property string|null $phone_work
 * @property string|null $phone_other
 * @property string|null $phone_fax
 * @property string|null $status
 * @property string|null $address_street
 * @property string|null $address_city
 * @property string|null $address_state
 * @property string|null $address_country
 * @property string|null $address_postalcode
 * @property Carbon|null $deleted_at
 * @property bool|null   $portal_only
 * @property bool|null   $show_on_employees
 * @property string|null $employee_status
 * @property string|null $messenger_id
 * @property string|null $messenger_type
 * @property string|null $reports_to_id
 * @property bool|null   $is_group
 * @property bool|null   $factor_auth
 * @property string|null $factor_auth_interface
 *
 * @package Joy\VoyagerCrm\Models
 */
class User extends \TCG\Voyager\Models\User
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use HasFactory;

    protected $table = 'users';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $casts = [
        'email_verified_at'         => 'datetime',
        'system_generated_password' => 'bool',
        'sugar_login'               => 'bool',
        'is_admin'                  => 'bool',
        'external_auth_only'        => 'bool',
        'receive_notifications'     => 'bool',
        'portal_only'               => 'bool',
        'show_on_employees'         => 'bool',
        'is_group'                  => 'bool',
        'factor_auth'               => 'bool'
    ];

    protected $dates = [
        'pwd_last_changed',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'system_generated_password'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'role_id',
        'settings',
        'created_at',
        'updated_at',
        'deleted_at',
        'user_name',
        'user_hash',
        'system_generated_password',
        'pwd_last_changed',
        'authenticate_id',
        'sugar_login',
        'first_name',
        'last_name',
        'is_admin',
        'external_auth_only',
        'receive_notifications',
        'description',
        'modified_by_id',
        'created_by_id',
        'title',
        'photo',
        'department',
        'phone_home',
        'phone_mobile',
        'phone_work',
        'phone_other',
        'phone_fax',
        'status',
        'address_street',
        'address_city',
        'address_state',
        'address_country',
        'address_postalcode',
        'portal_only',
        'show_on_employees',
        'employee_status',
        'messenger_id',
        'messenger_type',
        'reports_to_id',
        'is_group',
        'factor_auth',
        'factor_auth_interface'
    ];

    public function scopeGlobalSearch(Builder $query, $value): void
    {
        $query
            ->whereId($value)
            ->orWhere('name', 'LIKE', '%' . $value . '%')
            ->orWhere('email', 'LIKE', '%' . $value . '%');
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return UserFactory::new();
    }
}
