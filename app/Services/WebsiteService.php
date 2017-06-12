<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class WebsiteService extends BaseService
{
    protected $model = 'App\Models\Website';

    protected $rules = [
        'category_id' => 'required|exists:website_categories,id',
        'name' => 'required|max:155',
    ];

    /**
     * @param $this->model $project
     * @return $this->model
     */
    protected function fillExtra($website)
    {
        $user = Auth::user();
        $website->user_id = User::find(1)->id; // TODO set authenticated user

        return $website;
    }
}