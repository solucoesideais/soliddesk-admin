<?php

namespace Tests\Feature\Home;

use Library\Eloquent\Auth\Administrator;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_authenticated_admin_can_see_the_home_page()
    {
        $this->get('/')
            ->assertSuccessful()
            ->assertViewIs('home::index');
    }
}
