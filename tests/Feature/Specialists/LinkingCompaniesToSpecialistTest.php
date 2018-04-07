<?php

namespace Tests\Feature\Specialists;

use Library\Eloquent\Auth\Specialist;
use Library\Eloquent\Company;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class LinkingCompaniesToSpecialistTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_open_the_page_to_link_companies_to_a_specialist()
    {
        $specialist = create(Specialist::class);
        $company = create(Company::class);

        $this->get("/specialists/$specialist->id/companies")
            ->assertSuccessful()
            ->assertSee('name="companies[]"')
            ->assertSee(sprintf('value="%s"', $company->id));
    }

    /**
     * @test
     */
    public function an_admin_can_link_companies_to_a_specialist()
    {
        $specialist = create(Specialist::class);
        $companies = create(Company::class, [], 3);

        $this->post("/specialists/$specialist->id/companies", [
            'companies' => $companies->pluck('id')
        ])
            ->assertStatus(302)
            ->assertRedirect('/specialists')
            ->assertSessionHas('success');

        foreach ($companies as $company) {
            $this->assertDatabaseHas('company_specialist', ['company_id' => $company->id, 'specialist_id' => $specialist->id]);
        }
    }

    /**
     * @test
     */
    public function an_admin_can_unlink_companies_from_a_specialist()
    {
        $specialist = create(Specialist::class);
        $companies = create(Company::class, [], 3);
        $specialist->companies()->sync($companies->pluck('id'));

        $this->post("/specialists/$specialist->id/companies", [

        ])
            ->assertStatus(302)
            ->assertRedirect('/specialists')
            ->assertSessionHas('success');

        foreach ($companies as $company) {
            $this->assertDatabaseMissing('company_specialist', ['company_id' => $company->id, 'specialist_id' => $specialist->id]);
        }
    }
}