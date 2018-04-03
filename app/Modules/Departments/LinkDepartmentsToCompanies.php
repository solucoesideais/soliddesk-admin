<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Library\Eloquent\Department;

class LinkDepartmentsToCompanies extends Controller
{
    public function __invoke(Department $department, Request $request)
    {
        $department->companies()->sync($request->get('companies'));

        return redirect('/departments')->with('success', 'Companies successfully linked!');
    }
}