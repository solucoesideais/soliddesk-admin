<?php

namespace App\Modules\Home;

use App\Http\Controllers\Controller;
use Library\Eloquent\Auth\Manager;
use Library\Eloquent\Auth\User;
use Library\Eloquent\Company;

class HomeHandler extends Controller
{
    public function __invoke(Company $company, User $user, Manager $manager)
    {
        // @TODO: make the card a blade component. That way, we can move the logic for each card report into a View Composer class.

        return view('home::index', [
            'companies' => $company->count(),
            'blockedCompanies' => $company->whereNotNull('blocked_at')->count(),
            'users' => $user->count(),
            'managers' => $manager->count(),
        ]);
    }
}