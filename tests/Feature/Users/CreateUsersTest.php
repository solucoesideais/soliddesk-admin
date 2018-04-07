<?php

namespace Tests\Feature\Users;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Library\Auth\UserType;
use Library\Eloquent\Auth\User;
use Library\Eloquent\Company;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class CreateUsersTest extends TestCase
{
    use AuthenticatesAdmin, WithFaker;

    /**
     * @test
     */
    public function an_admin_can_see_the_create_user_form()
    {
        $this->get('/users/create')
            ->assertSuccessful()
            ->assertViewHas('creating', true)
            ->assertSee('name="name"')
            ->assertSee('name="email"')
            ->assertSee('name="type"')
            ->assertSee('name="company"');
    }

    /**
     * @test
     */
    public function an_admin_can_store_a_new_user()
    {
        [$name, $email, $password, $company] = [$this->faker->name, $this->faker->email, $this->faker->password, create(Company::class)];
        $type = $this->faker->randomElement(UserType::options());

        $this->post('/users', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'company' => $company->id,
            'type' => $type,
        ])
            ->assertStatus(302)
            ->assertRedirect('/users')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('users', [
            'name' => $name,
            'email' => $email,
            'company_id' => $company->id,
            'type' => $type
        ]);

        $this->assertTrue(
            Hash::check($password,
                User::where('email', $email)->first()->password
            )
        );
    }
}