<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAdminModel extends Model
{
    protected $table = 'user_admin';

    protected $fillable = [
        'country_id',
        'role',
        'name',
        'email',
        'mobile_number',
        'password',
        'profile_photo',
        'is_deleted',
        'is_blocked',
        'ask_password_change'
        ];

    protected $hidden = [
        'password',
        'remember_token',
        ];

    protected function casts():array
    {
        return [
            'password' => 'hashed'
        ];
    }

    public function MasterCountry() : BelongsTo
    {
        return $this->belongsTo(MasterCountryModel::class);
    }
}
