<?php

namespace App\Modules\Departments\Responses;

use Library\Eloquent\Department;

class DepartmentsPage
{
    /**
     * @var Department
     */
    private $department;

    public function __construct(Department $department)
    {
        $this->department = $department;
    }

    public function index()
    {
        return view('departments::index')
            ->with('departments', $this->department->paginate(10))
            ->with('creating', false)
            ->with('editing', false)
            ->with('linkingCompanies', false);
    }

    public function create()
    {
        return $this->index()
            ->with('creating', true);
    }

    public function edit(Department $department)
    {
      return $this->index()
            ->with('editing', true)
            ->with('record', $department);
    }

    public function companies()
    {
        return $this->index()
            ->with('linkingCompanies', true);
    }
}