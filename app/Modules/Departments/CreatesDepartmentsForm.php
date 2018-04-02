<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use App\Modules\Administrators\Responses\AdministratorsPage;
use App\Modules\Departments\Responses\DepartmentsPage;

class CreatesDepartmentsForm extends Controller
{
    public function __invoke(DepartmentsPage $page)
    {
        return $page->create();
    }
}