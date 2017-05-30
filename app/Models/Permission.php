<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 'created_at', 'updated_at'
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'permission_role');
    }
}
