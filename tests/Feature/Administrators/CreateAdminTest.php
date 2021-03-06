<?php

namespace Tests\Feature\Administrators;

use Library\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Library\Eloquent\Auth\Administrator;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class CreateAdminTest extends TestCase
{
    use AuthenticatesAdmin, WithFaker;

    /**
     * @test
     */
    public function an_admin_can_see_the_create_admin_form()
    {
        $this->get('/administrators/create')
            ->assertSuccessful()
            ->assertViewHas('creating', true)
            ->assertSee('name="name"')
            ->assertSee('name="email"')
            ->assertSee('name="password"');
    }

    /**
     * @test
     */
    public function an_admin_can_create_another_admin()
    {
        [$name, $email] = [$this->faker->name, $this->faker->safeEmail];

        $this->post('/administrators', [
            'name' => $name,
            'email' => $email,
            'password' => '123456',
        ])
            ->assertStatus(302)
            ->assertRedirect('/administrators')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('administrators', [
            'name' => $name,
            'email' => $email,
        ]);

        $this->assertTrue(
            Hash::check('123456',
                Administrator::where('email', $email)->first()->password
            )
        );
    }

    /**
     * @test
     */
    public function test_validation()
    {
        $this->post('/administrators')
            ->assertStatus(302)
            ->assertSessionHasErrorsIn(BaseFormRequest::FORM_ERROR_BAG, ['name', 'email', 'password']);
    }
}