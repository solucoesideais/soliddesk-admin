<?php

namespace App\Modules\Specialists;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Library\Eloquent\Auth\Specialist;

class LinkCompaniesToSpecialist extends Controller
{
    public function __invoke(Specialist $specialist, Request $request)
    {
        $specialist->companies()->sync($request->get('companies'));

        return redirect('/specialists')->with('success', 'Companies successfully linked!');

    }
}