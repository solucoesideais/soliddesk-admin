<?php

namespace Tests\Feature\Companies;

use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class CreateCompaniesTest extends TestCase
{
    use AuthenticatesAdmin;

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
}