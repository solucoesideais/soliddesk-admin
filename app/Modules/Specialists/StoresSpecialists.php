<?php

namespace App\Modules\Specialists;

use App\Http\Controllers\Controller;
use App\Modules\Specialists\Requests\StoreSpecialistRequest;
use Library\Eloquent\Auth\Specialist;

class StoresSpecialists extends Controller
{
    public function __invoke(Specialist $specialist, StoreSpecialistRequest $request)
    {
        $specialist->create($request->convertsToBag()->attributes());

        return redirect('/specialists')->with('success', __('Specialist successfully created!'));
    }
}