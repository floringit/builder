<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentSetting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'content_id', 'name', 'value', 'deleted', 'created_at', 'updated_at',
    ];
}