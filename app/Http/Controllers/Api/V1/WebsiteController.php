<?php

namespace App\Http\Controllers\Api\v1;

use App\Services\WebsiteService;

class WebsiteController extends ApiController
{
    protected $service;

    public function __construct(WebsiteService $websiteService)
    {
        $this->service = $websiteService;
    }
}
