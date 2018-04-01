<?php

namespace App\Modules\Administrators;

use App\Http\Controllers\Controller;
use App\Modules\Administrators\Responses\ManageAdministratorsPage;

class CreatesAdministratorsForm extends Controller
{
    public function __invoke(ManageAdministratorsPage $page)
    {
        return $page->creating()->view();
    }
}