<?php

namespace App\Modules\Users;

use App\Http\Controllers\Controller;
use App\Modules\Users\Responses\UsersPage;
use Library\Eloquent\Company;

class CreatesUsers extends Controller
{
    public function __invoke(Company $company, UsersPage $page)
    {
        return $page->create($company);
    }
}