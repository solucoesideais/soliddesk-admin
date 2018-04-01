<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use App\Modules\Departments\Responses\DepartmentsPage;

class DisplaysDepartments extends Controller
{
    public function __invoke(DepartmentsPage $page)
    {
        return $page->view();
    }
}