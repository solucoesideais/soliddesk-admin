<?php

namespace App\Modules\Specialists;

use App\Http\Controllers\Controller;
use App\Modules\Specialists\Responses\SpecialistsPage;
use Library\Eloquent\Auth\Specialist;
use Library\Eloquent\Company;

class SpecialistCompaniesForm extends Controller
{
    public function __invoke(Specialist $specialist, Company $company, SpecialistsPage $page)
    {
        return $page->companies($specialist, $company);
    }
}