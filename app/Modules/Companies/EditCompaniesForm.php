<?php

namespace App\Modules\Companies;

use App\Http\Controllers\Controller;
use App\Modules\Companies\Responses\CompaniesPage;
use Library\Eloquent\Company;

class EditCompaniesForm extends Controller
{
    public function __invoke(Company $company, CompaniesPage $page)
    {
        return $page->edit($company);
    }
}
