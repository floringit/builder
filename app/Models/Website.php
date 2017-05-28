<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'category_id', 'name', 'deleted', 'created_at', 'updated_at',
    ];

    public function owner()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\WebsiteCategory', 'category_id');
    }

    public function pages()
    {
        return $this->hasMany('App\Models\Page');
    }
}
