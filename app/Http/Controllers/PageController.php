<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        App::setLocale('ro');
        $user = Auth::user();

        return view('welcome', [
            'user' => $user,
        ]);
    }
}
