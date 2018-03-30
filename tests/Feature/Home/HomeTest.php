<?php

namespace Tests\Feature\Home;

use Library\Eloquent\Auth\Administrator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function an_authenticated_admin_can_see_the_home_page()
    {
        $admin = factory(Administrator::class)->create();

        auth()->login($admin);

        $this->get('/')
            ->assertSuccessful()
            ->assertViewIs('home::index');
    }
}
