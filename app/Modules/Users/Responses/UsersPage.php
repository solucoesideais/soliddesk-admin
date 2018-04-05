<?php

namespace App\Modules\Users\Responses;

use Library\Eloquent\Auth\User;
use Library\Eloquent\Company;

class UsersPage
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('users::index')
            ->with('users', $this->user->paginate(10))
            ->with('creating', false);
    }

    public function create(Company $company)
    {
        return $this->index()
            ->with('creating', true)
            ->with('companies', $company->all());
    }
}