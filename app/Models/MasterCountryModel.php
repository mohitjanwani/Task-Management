<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterCountryModel extends Model
{
    protected $table = 'master_country';

    protected $fillable = [
        'country_code',
        'country_name',
        'is_deleted'
    ];

    public function UserAdmin():HasMany
    {
        return $this->hasMany(UserAdminModel::class);
    }
}
