<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class BuilderController extends Controller
{
    public function __construct() {
//        App::setLocale('ro');
    }

    public function index()
    {
        return view('builder.index', []);
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
