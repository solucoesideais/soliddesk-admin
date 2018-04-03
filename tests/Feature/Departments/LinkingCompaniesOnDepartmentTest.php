<?php

namespace Tests\Feature\Departments;

use Library\Eloquent\Company;
use Library\Eloquent\Department;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class LinkingCompaniesOnDepartmentTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_open_the_page_to_link_department_to_companies()
    {
        $department = create(Department::class);

        $this->get("/departments/$department->id/companies")
            ->assertSuccessful();
    }

    /**
     * @test
     */
    public function an_admin_can_link_companies_to_a_department()
    {
        $department = create(Department::class);
        $companies = create(Company::class, [], 3);

        $this->post("/departments/$department->id/companies", [
            'companies' => $companies->pluck('id')
        ])
            ->assertStatus(302)
            ->assertRedirect('/departments')
            ->assertSessionHas('success');

        foreach ($companies as $company) {
            $this->assertDatabaseHas('company_department', ['company_id' => $company->id, 'department_id' => $department->id]);
        }
    }

    /**
     * @test
     */
    public function an_admin_can_unlink_companies_to_a_department()
    {
        $department = create(Department::class);
        $companies = create(Company::class, [], 3);
        $department->companies()->sync($companies->pluck('id'));

        $this->post("/departments/$department->id/companies", [

        ])
            ->assertStatus(302)
            ->assertRedirect('/departments')
            ->assertSessionHas('success');

        foreach ($companies as $company) {
            $this->assertDatabaseMissing('company_department', ['company_id' => $company->id, 'department_id' => $department->id]);
        }
    }
}