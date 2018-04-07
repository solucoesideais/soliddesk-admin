<?php

namespace App\Modules\Users;

use App\Http\Controllers\Controller;
use App\Modules\Users\Responses\UsersPage;
use Library\Eloquent\Auth\User;

class EditUsersForm extends Controller
{
    public function __invoke(User $user, UsersPage $page)
    {
        return $page->edit($user);
    }
}