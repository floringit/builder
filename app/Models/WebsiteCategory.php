<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'website_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key', 'deleted', 'created_at', 'updated_at',
    ];

    public function websites()
    {
        return $this->hasMany('App\Models\Website', 'category_id');
    }
}
