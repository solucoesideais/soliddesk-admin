<?php

namespace App\Modules\Administrators;

use App\Http\Controllers\Controller;
use App\Modules\Administrators\Requests\StoreAdministratorRequest;
use Library\Eloquent\Auth\Administrator;

class DisplaysAdministrators extends Controller
{
    public function __invoke(Administrator $administrator)
    {
        return view('administrators::manage')
            ->with('administrators', $administrator->paginate(10));
    }
}