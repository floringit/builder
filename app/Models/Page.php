<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'website_id', 'theme_id', 'type_id', 'name', 'slug', 'created_at', 'updated_at',
    ];

    public function owner()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function website()
    {
        return $this->belongsTo('App\Models\Website');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\PageType', 'type_id');
    }

    public function contents()
    {
        return $this->hasMany('App\Models\Content');
    }
}
