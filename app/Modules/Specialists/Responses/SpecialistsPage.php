<?php

namespace App\Modules\Specialists\Responses;

use Library\Eloquent\Auth\Specialist;
use Library\Eloquent\Company;

class SpecialistsPage
{
    /**
     * @var Specialist
     */
    private $specialist;

    public function __construct(Specialist $specialist)
    {
        $this->specialist = $specialist;
    }

    public function index()
    {
        return view('specialists::index')
            ->with('specialists', $this->specialist->paginate(10))
            ->with('creating', false)
            ->with('linkingCompanies', false);
    }

    public function create()
    {
        return $this->index()
            ->with('creating', true);
    }

    public function companies(Specialist $specialist, Company $company)
    {
        return $this->index()
            ->with('linkingCompanies', true)
            ->with('record', $specialist)
            ->with('companies', $company->all());
    }
}