<?php

namespace App\Http\Controllers\Api\v1;

use App\Services\ContentService;
use App\Services\VersionService;
use Illuminate\Http\Request;

class ContentController extends ApiController
{
    protected $service;
    protected $versions;

    public function __construct(
        ContentService $contentService,
        VersionService $versionService
    )
    {
        $this->service = $contentService;
        $this->versions = $versionService;
    }

    protected function beforeCreate(Request &$request)
    {
        $version = $this->versions->store([]);
        $request->request->add(['version_id' => $version->id]);
    }
}
