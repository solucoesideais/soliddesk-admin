<?php

namespace App\Modules\Users;

use App\Http\Controllers\Controller;
use App\Modules\Users\Requests\StoreUserRequest;
use Library\Eloquent\Auth\User;

class StoresUsers extends Controller
{
    public function __invoke(User $user, StoreUserRequest $request)
    {
        $user->create($request->convertsToBag()->attributes());

        return redirect('/users')->with('success', __('User successfully created!'));
    }
}