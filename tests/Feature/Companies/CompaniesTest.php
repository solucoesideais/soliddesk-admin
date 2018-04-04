<?php

namespace Tests\Feature\Companies;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\WithFaker;
use Library\Eloquent\Company;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class CompaniesTest extends TestCase
{
    use AuthenticatesAdmin, WithFaker;

    /**
     * @test
     */
    public function an_admin_can_see_the_create_companies_form()
    {
        $this->get('/companies/create')
            ->assertSuccessful()
            ->assertViewHas('creating', true)
            ->assertSee('name="name"');
    }

    /**
     * @test
     */
    public function an_admin_can_create_a_company()
    {
        $name = $this->faker->company;

        $this->post('/companies', [
            'name' => $name,
        ])
            ->assertStatus(302)
            ->assertRedirect('/companies')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('companies', [
            'name' => $name,
        ]);
    }

    /**
     * @test
     */
    public function an_admin_can_update_a_company()
    {
        $name = $this->faker->company;
        $company = create(Company::class);

        $this->patch("/companies/$company->id", [
            'name' => $name,
        ])
            ->assertStatus(302)
            ->assertRedirect('/companies')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('companies', [
            'name' => $name,
        ]);
    }

    /**
     * @test
     */
    public function an_admin_can_block_a_company()
    {
        Carbon::setTestNow($now = '2018-04-04 15:10:00');
        $company = create(Company::class);

        $this->patch("/companies/$company->id/status", [
            'block' => true,
        ])
            ->assertStatus(302)
            ->assertRedirect('/companies')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('companies', [
            'name' => $company->name,
            'blocked_at' => $now
        ]);
    }

    /**
     * @test
     */
    public function an_admin_can_unblock_a_company()
    {
        Carbon::setTestNow($now = '2018-04-04 15:10:00');
        $company = create(Company::class, ['blocked_at' => $now]);

        $this->patch("/companies/$company->id/status")
            ->assertStatus(302)
            ->assertRedirect('/companies')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('companies', [
            'name' => $company->name,
            'blocked_at' => null
        ]);

        $this->patch("/companies/$company->id/status", [
            'block' => false
        ])
            ->assertStatus(302)
            ->assertRedirect('/companies')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('companies', [
            'name' => $company->name,
            'blocked_at' => null
        ]);
    }

    /**
     * @test
     */
    public function test_validation()
    {
        $this->post('/companies')
            ->assertStatus(302)
            ->assertSessionHasErrorsIn('form', 'name');
    }
}