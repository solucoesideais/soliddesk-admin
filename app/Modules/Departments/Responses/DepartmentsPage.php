<?php

namespace App\Modules\Departments\Responses;

use Library\Eloquent\Department;

class DepartmentsPage
{
    /**
     * @var Department
     */
    private $department;

    private $creating = false;

    public function __construct(Department $department)
    {
        $this->department = $department;
    }

    public function view()
    {
        return view('departments::index')
            ->with('departments', $this->department->paginate(10))
            ->with('creating', $this->creating);
    }

    public function creating(): self
    {
        $this->creating = true;

        return $this;
    }
}