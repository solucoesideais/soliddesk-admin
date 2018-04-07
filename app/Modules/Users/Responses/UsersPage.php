<?php

namespace App\Modules\Users\Responses;

use Library\Eloquent\Auth\User;
use Library\Eloquent\Company;
use Library\Eloquent\Department;

class UsersPage
{
    /**
     * @var User
     */
    private $user;

    /**
     * @var Department
     */
    private $department;

    public function __construct(User $user, Department $department)
    {
        $this->user = $user;
        $this->department = $department;
    }

    public function index()
    {
        return view('users::index')
            ->with('users', $this->user->paginate(10))
            ->with('departments', $this->department->all())
            ->with('creating', false);
    }

    public function create(Company $company)
    {
        return $this->index()
            ->with('creating', true)
            ->with('companies', $company->all());
    }
}