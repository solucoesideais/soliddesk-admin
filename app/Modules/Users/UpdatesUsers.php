<?php

namespace App\Modules\Users;

use App\Http\Controllers\Controller;
use App\Modules\Users\Requests\UpdateUserRequest;
use Library\Eloquent\Auth\User;

class UpdatesUsers extends Controller
{
    public function __invoke(User $user, UpdateUserRequest $request)
    {
        $user->update($request->convertsToBag()->attributes());

        return redirect('/users')->with('success', __('User successfully updated!'));
    }
}