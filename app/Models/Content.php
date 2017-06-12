<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'page_id', 'parent_id', 'version_id', 'type', 'order', 'content', 'created_at', 'updated_at',
    ];

    public function owner()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function page()
    {
        return $this->belongsTo('App\Models\Page');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Content', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Content', 'parent_id');
    }

    public function version()
    {
        return $this->belongsTo('App\Models\Version');
    }

    public function contentSettings()
    {
        return $this->hasMany('App\Models\ContentSettings');
    }
}