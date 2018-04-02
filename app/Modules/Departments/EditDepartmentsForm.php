<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use App\Modules\Departments\Responses\DepartmentsPage;
use Library\Eloquent\Department;

class EditDepartmentsForm extends Controller
{
    public function __invoke(Department $department, DepartmentsPage $page)
    {
        return $page->edit($department);
    }
}