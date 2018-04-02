<?php

namespace App\Modules\Administrators;

use App\Http\Controllers\Controller;
use App\Modules\Administrators\Responses\AdministratorsPage;

class CreatesAdministratorsForm extends Controller
{
    public function __invoke(AdministratorsPage $page)
    {
        return $page->create();
    }
}