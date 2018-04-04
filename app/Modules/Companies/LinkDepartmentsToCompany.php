<?php

namespace App\Modules\Companies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Library\Eloquent\Company;

class LinkDepartmentsToCompany extends Controller
{
    public function __invoke(Company $company, Request $request)
    {
        $company->departments()->sync($request->get('departments'));

        return redirect('/companies')->with('success', __('Departments successfully added to the company'));
    }
}