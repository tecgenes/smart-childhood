<?php

namespace App\Http\Controllers\Web\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index() : View
    {
        return view('public.welcome');
    }

    public function termConditions() : View
    {
        return view('public.term-conditions');
    }
}
