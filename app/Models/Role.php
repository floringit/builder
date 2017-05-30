<?php

namespace App\Models;

use App\Traits\RoleTrait;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use RoleTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'created_at', 'updated_at'
    ];

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission', 'permission_role', 'role_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_role', 'role_id');
    }
}
