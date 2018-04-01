<?php

namespace App\Modules\Administrators;

use App\Http\Controllers\Controller;

class CreatesAdministratorsForm extends Controller
{
    public function __invoke()
    {
        return view('administrators::create');
    }
}