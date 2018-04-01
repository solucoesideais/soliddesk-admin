<?php

namespace App\Modules\Administrators\resources;

use App\Http\Controllers\Controller;
use Library\Eloquent\Auth\Administrator;

class DeletesAdministrators extends Controller
{
    public function __invoke(Administrator $administrator)
    {
        $administrator->delete();

        return redirect('/administrators')->with('success', __('The administrator was successfully deleted!'));
    }
}