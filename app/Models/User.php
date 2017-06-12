<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, UserTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'role_id', 'username', 'name', 'email', 'password', 'created_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'user_role', 'user_id');
    }

    public function websites()
    {
        return $this->hasMany('App\Models\Website');
    }

    public function pages()
    {
        return $this->hasMany('App\Models\Page');
    }

    public function contents()
    {
        return $this->hasMany('App\Models\Content');
    }

    public function contentSettings()
    {
        return $this->hasMany('App\Models\ContentSettings');
    }
}
