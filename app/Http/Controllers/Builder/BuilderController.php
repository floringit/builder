<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

use App\Services\WebsiteCategoryService;

class BuilderController extends Controller
{
    protected $websiteCategoryService;

    public function __construct(
        WebsiteCategoryService $websiteCategoryService
    )
    {
        App::setLocale('ro');
        $this->websiteCategoryService = $websiteCategoryService;
    }

    public function index()
    {
        $categories = $this->websiteCategoryService->getAll(0)->toArray();

        return view('builder.index', [
            'jss' => [
                'components/build.js'
            ],
            'categories' => $categories
        ]);
    }

    public function edit()
    {
        return view('builder.edit', [
            'edit' => true,
            'jss' => [
                'components/build.js'
            ]
        ]);
    }
}
