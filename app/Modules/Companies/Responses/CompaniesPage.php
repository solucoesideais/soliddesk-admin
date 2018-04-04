<?php

namespace App\Modules\Companies\Responses;

use Library\Eloquent\Auth\User;
use Library\Eloquent\Company;

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
            ->with('creating', false)
            ->with('editing', false);
    }

    public function create()
    {
        return $this->index()
            ->with('creating', true);
    }
}