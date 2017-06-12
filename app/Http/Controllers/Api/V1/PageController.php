<?php

namespace App\Http\Controllers\Api\v1;

use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends ApiController
{
    protected $service;

    public function __construct(PageService $pageService)
    {
        $this->service = $pageService;
    }
}
