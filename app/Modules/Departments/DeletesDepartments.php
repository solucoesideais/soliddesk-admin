<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use Library\Eloquent\Auth\Administrator;
use Library\Eloquent\Department;

class DeletesDepartments extends Controller
{
    public function __invoke(Department $department)
    {
        $department->delete();

        return redirect('/departments')->with('success', __('The department was successfully deleted!'));
    }
}