<?php

namespace App\Modules\Companies\Responses;

use Library\Eloquent\Auth\User;
use Library\Eloquent\Company;
use Library\Eloquent\Department;

class CompaniesPage
{
    /**
     * @var User
     */
    private $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function index()
    {
        return view('companies::index')
            ->with('companies', $this->company->paginate(10))
            ->with('creating', false);
    }

    public function create()
    {
        return $this->index()
            ->with('creating', true);
    }

    public function companies(Company $company, Department $department)
    {
        return $this->index()
            ->with('linkingDepartments', true)
            ->with('record', $company)
            ->with('departments', $department->all());
    }
}