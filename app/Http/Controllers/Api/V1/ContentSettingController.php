<?php

namespace App\Http\Controllers\Api\v1;

use App\Services\ContentSettingService;

class ContentSettingController extends ApiController
{
    protected $service;

    public function __construct(
        ContentSettingService $contentSettingService
    )
    {
        $this->service = $contentSettingService;
    }
}
