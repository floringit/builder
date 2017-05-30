<?php

namespace App\Traits;

trait UserTrait
{
    /*
    |--------------------------------------------------------------------------
    | User Trait
    |--------------------------------------------------------------------------
    |
    | This trait is used in the User model and provides some methods
    | for modifying user
    | for checking permissions per role and user roles and attaching/dettaching
    | role for user
    |
    */

    /**
     * Method to get check if a user has a specific role
     *
     * @param  string/object/array  $name role name
     * @return Boolean
     */
    public function hasRole($name)
    {
        if (is_object($name)) {
            foreach ($name as $role) {
                $has = $this->hasRole($role->name);
            }

            return $has;
        } else if (is_array($name)) {
            foreach ($name as $role) {
                $has = $this->hasRole($role);
            }

            return $has;
        } else {
            $userRoles = $this->roles()->get();

            foreach ($userRoles as $role) {
                if ($role->name == $name) {
                    return true;
                }
            }
        }

        return false;
    }

    public function isGod()
    {
        return $this->hasRole('god');
    }

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function isEditor()
    {
        return $this->hasRole('editor');
    }

    /**
     * Method to attach a role for a user
     *
     * @param  string/object/array  $role role name
     * @return void
     */
    public function attachRole($role)
    {
        // if App\Role object sent
        if (is_object($role)) {
            $role = $role->getKey();
        }

        // if array sent
        if (is_array($role)) {
            $role = $role['id'];
        }

        $this->roles()->attach($role);
    }

    /**
     * Method to detach a role for a user
     *
     * @param  string/object/array  $role role name
     * @return void
     */
    public function detachRole($role)
    {
        // if App\Role object sent
        if (is_object($role)) {
            $role = $role->getKey();
        }

        // if array sent
        if (is_array($role)) {
            $role = $role['id'];
        }

        $this->roles()->detach($role);
    }

    /**
     * Method to check if a specific resource is owned by current user
     *
     * @param  object  $related resource object
     * @return Boolean
     */
    public function owns($related)
    {
        return $this->id == $related->user_id;
    }
}
