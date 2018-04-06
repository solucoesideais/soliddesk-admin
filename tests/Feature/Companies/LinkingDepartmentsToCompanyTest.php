<?php

namespace Tests\Feature\Departments;

use Library\Eloquent\Company;
use Library\Eloquent\Department;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class LinkingDepartmentsToCompanyTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_open_the_page_to_link_departments_to_company()
    {
        $department = create(Company::class);

        $this->get("/companies/$department->id/departments")
            ->assertSuccessful();
    }

    /**
     * @test
     */
    public function an_admin_can_link_departments_to_a_company()
    {
        $company = create(Company::class);
        $departments = create(Department::class, [], 3);

        $this->post("/companies/$company->id/departments", [
            'departments' => $departments->pluck('id')
        ])
            ->assertStatus(302)
            ->assertRedirect('/companies')
            ->assertSessionHas('success');

        foreach ($departments as $department) {
            $this->assertDatabaseHas('company_department', ['company_id' => $company->id, 'department_id' => $department->id]);
        }
    }

    /**
     * @test
     */
    public function an_admin_can_unlink_companies_to_a_department()
    {
        $company = create(Company::class);
        $departments = create(Department::class, [], 3);
        $company->departments()->sync($departments->pluck('id'));

        $this->post("/companies/$company->id/departments", [

        ])
            ->assertStatus(302)
            ->assertRedirect('/companies')
            ->assertSessionHas('success');

        foreach ($departments as $department) {
            $this->assertDatabaseMissing('company_department', ['company_id' => $company->id, 'department_id' => $department->id]);
        }
    }
}