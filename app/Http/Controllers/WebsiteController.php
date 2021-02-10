<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(): View
    {
        return view('homepage');
    }

    public function album(): View
    {
        return view('homepage');
    }
}
