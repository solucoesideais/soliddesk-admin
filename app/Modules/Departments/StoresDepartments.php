<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use App\Modules\Departments\Requests\StoreDepartmentRequest;
use Library\Eloquent\Department;

class StoresDepartments extends Controller
{
    public function __invoke(Department $department, StoreDepartmentRequest $request)
    {
        $department->create($request->validated());

        return redirect('/departments')->with('success', __('Department successfully created!'));
    }
}