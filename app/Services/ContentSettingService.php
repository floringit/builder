<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ContentSettingService extends BaseService
{
    protected $model = 'App\Models\ContentSetting';

    protected $rules = [
        'content_id' => 'required|exists:contents,id',
        'name' => 'required|max:155',
        'value' => 'required',
    ];

    /**
     * @param $this->model $project
     * @return $this->model
     */
    protected function fillExtra($contentSetting)
    {
        $user = Auth::user();
        $contentSetting->user_id = User::find(1)->id; // TODO set authenticated user

        return $contentSetting;
    }
}