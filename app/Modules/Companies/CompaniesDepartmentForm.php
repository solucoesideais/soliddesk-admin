<?php

namespace App\Modules\Companies;

use App\Http\Controllers\Controller;
use App\Modules\Companies\Responses\CompaniesPage;
use Library\Eloquent\Company;
use Library\Eloquent\Department;

class CompaniesDepartmentForm extends Controller
{
    public function __invoke(Company $company, Department $department, CompaniesPage $page)
    {
        return $page->companies($company, $department);
    }
}
