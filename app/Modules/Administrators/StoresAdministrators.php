<?php

namespace App\Modules\Administrators;

use App\Http\Controllers\Controller;
use App\Modules\Administrators\Requests\StoreAdministratorRequest;
use Library\Eloquent\Auth\Administrator;

class StoresAdministrators extends Controller
{
    public function __invoke(Administrator $administrator, StoreAdministratorRequest $request)
    {
        $administrator->create($request->convertsToBag()->attributes());

        return redirect('/administrators')->with('success', __('Administrator successfully created!'));
    }
}