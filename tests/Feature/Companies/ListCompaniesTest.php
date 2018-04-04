<?php

namespace Tests\Feature\Companies;

use Library\Eloquent\Auth\User;
use Library\Eloquent\Company;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class ListCompaniesTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_list_companies()
    {
        $company = create(Company::class);

        $this->get('/companies')
            ->assertSuccessful()
            ->assertSeeText(e($company->name));
    }
}
