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
     * @var Company
     */
    private $company;

    /**
     * @var Department
     */
    private $department;

    public function __construct(User $user, Company $company, Department $department)
    {
        $this->user = $user;
        $this->company = $company;
        $this->department = $department;
    }

    public function index()
    {
        return view('users::index')
            ->with('users', $this->user->paginate(10))
            ->with('creating', false)
            ->with('editing', false);
    }

    public function create()
    {
        return $this->index()
            ->with('creating', true)
            ->with('departments', $this->department->all())
            ->with('companies', $this->company->all());
    }

    public function edit($user)
    {
        return $this->index()
            ->with('editing', true)
            ->with('record', $user)
            ->with('companies', $this->company->all())
            ->with('departments', $this->department->all());
    }
}