<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key', 'deleted', 'created_at', 'updated_at',
    ];

    public function pages()
    {
        return $this->hasMany('App\Models\Page', 'type_id');
    }
}
