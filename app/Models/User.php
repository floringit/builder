<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'role_id', 'username', 'name', 'email', 'password', 'deleted', 'created_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

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
