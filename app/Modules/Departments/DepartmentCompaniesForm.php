<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use App\Modules\Departments\Responses\DepartmentsPage;
use Library\Eloquent\Company;
use Library\Eloquent\Department;

class DepartmentCompaniesForm extends Controller
{
    public function __invoke(Department $department, Company $company, DepartmentsPage $page)
    {
        return $page->companies($department, $company);
    }
}