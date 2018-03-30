<?php

namespace App\Modules\Home;

use App\Http\Controllers\Controller;

class HomeHandler extends Controller
{
    public function __invoke()
    {
        return view('home::index');
    }
}