<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use App\Modules\Departments\Responses\DepartmentsPage;

class DepartmentCompaniesForm extends Controller
{
    public function __invoke(DepartmentsPage $page)
    {
        return $page->companies();
    }
}