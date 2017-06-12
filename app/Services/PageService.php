<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PageService extends BaseService
{
    protected $model = 'App\Models\Page';

    protected $rules = [
        'website_id' => 'required|exists:websites,id',
        'type_id' => 'required|exists:page_types,id',
        'name' => 'required|max:155',
        'slug' => 'required|max:155',
    ];

    protected $attributes = [
        'theme_id' => 0
    ];

    /**
     * @param $this->model $project
     * @return $this->model
     */
    protected function fillExtra($page)
    {
        $user = Auth::user();
        $page->user_id = User::find(1)->id; // TODO set authenticated user
        $page->theme_id = 0; // TODO set default values

        return $page;
    }
}