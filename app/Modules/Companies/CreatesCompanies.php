<?php

namespace App\Modules\Companies;

use App\Http\Controllers\Controller;
use App\Modules\Companies\Responses\CompaniesPage;

class CreatesCompanies extends Controller
{
    public function __invoke(CompaniesPage $page)
    {
        return $page->create();
    }
}