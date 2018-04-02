<?php

namespace Tests\Feature\Departments;

use Library\Eloquent\Department;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class LinkingCompaniesOnDepartmentTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     * @group f
     */
    public function an_admin_can_open_the_page_to_link_department_to_companies()
    {
        $department = create(Department::class);

        $this->get("/departments/$department->id/companies")
            ->assertSuccessful();
    }
}