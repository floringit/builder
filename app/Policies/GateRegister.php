<?php

namespace App\Policies;

use App\Models\Permission;
use Illuminate\Support\Facades\Gate;

class GateRegister
{
    public static function define()
    {
        foreach (self::getPermissions() as $permission)
        {
            Gate::define($permission->name, function ($user) use ($permission) {
                return $user->hasRole($permission->roles);
            });
        }
    }

    protected static function getPermissions()
    {
        return Permission::with('roles')->get();
    }
}