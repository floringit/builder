<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ContentService extends BaseService
{
    protected $model = 'App\Models\Content';

    protected $rules = [
        'page_id' => 'required|exists:pages,id',
        'version_id' => 'required|exists:versions,id',
        'content' => 'required',
    ];

    /**
     * @param $this->model $project
     * @return $this->model
     */
    protected function fillExtra($content)
    {
        $user = Auth::user();
        $content->user_id = User::find(1)->id; // TODO set authenticated user
        $content->parent_id = 0;

        return $content;
    }
}