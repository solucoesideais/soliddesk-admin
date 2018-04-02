<?php

namespace App\Modules\Users;

use App\Http\Controllers\Controller;
use App\Modules\Users\Responses\UsersPage;

class CreatesUsers extends Controller
{
    public function __invoke(UsersPage $page)
    {
        return $page->create();
    }
}