<?php

namespace Tests\Feature\Users;

use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class CreateUsersTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     * @group f
     */
    public function an_admin_can_see_the_create_user_form()
    {
        $this->get('/users/create')
            ->assertSuccessful()
            ->assertViewHas('creating', true)
            ->assertSee('name="name"')
            ->assertSee('name="email"')
            ->assertSee('name="manager"');
    }
}