<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Library\Eloquent\Department;

class UpdatesDepartments extends Controller
{
    public function __invoke(Department $department, Request $request)
    {
        $department->update(['name' => $request->get('name')]);

        return redirect('/departments')
            ->with('success', 'Department successfully updated!');
    }
}