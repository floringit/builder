<?php

namespace App\Traits;

trait RoleTrait
{
    /*
    |--------------------------------------------------------------------------
    | Role Trait
    |--------------------------------------------------------------------------
    |
    | This trait is used in the Role model and provides some methods
    | for checking permissions per role and attaching/dettaching
    | permissions for a role
    |
    */

    /**
     * Method to get check if a given role has a specific permission
     *
     * @param  string  $name permission name
     * @return Boolean
     */
    public function hasPermission($name)
    {
        foreach ($this->permissions()->get() as $perm) {
            if ($perm->name == $name) {
                return true;
            }
        }

        return false;
    }

    /**
     * Method to attach a permission for a role
     *
     * @param  string/object/array  $permission permission name
     * @return void
     */
    public function attachPermission($permission)
    {
        // if App\Role object sent
        if (is_object($permission)) {
            $permission = $permission->getKey();
        }

        // if array sent
        if (is_array($permission)) {
            $permission = $permission['id'];
        }

        $this->permissions()->attach($permission, [
            'created_at' => time(),
            'updated_at' => time()
        ]);
    }

    /**
     * Method to detach a permission for a role
     *
     * @param  string/object/array  $permission permission name
     * @return void
     */
    public function detachPermission($permission)
    {
        // if App\Role object sent
        if (is_object($permission)) {
            $permission = $permission->getKey();
        }

        // if array sent
        if (is_array($permission)) {
            $permission = $permission['id'];
        }

        $this->permissions()->detach($permission);
    }
}
