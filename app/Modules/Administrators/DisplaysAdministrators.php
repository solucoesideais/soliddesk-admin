<?php

namespace App\Modules\Administrators;

use App\Http\Controllers\Controller;
use App\Modules\Administrators\Requests\StoreAdministratorRequest;
use App\Modules\Administrators\Responses\ManageAdministratorsPage;
use Library\Eloquent\Auth\Administrator;

class DisplaysAdministrators extends Controller
{
    public function __invoke(ManageAdministratorsPage $page)
    {
        return $page->view();
    }
}