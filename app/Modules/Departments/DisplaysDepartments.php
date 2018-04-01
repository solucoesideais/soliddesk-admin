<?php

namespace App\Modules\Departments;

use App\Http\Controllers\Controller;
use App\Modules\Departments\Responses\ManageDepartmentsPage;

class DisplaysDepartments extends Controller
{
    public function __invoke(ManageDepartmentsPage $page)
    {
        return $page->view();
    }
}