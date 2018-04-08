<?php

namespace Tests\Feature\Users;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Library\Auth\UserType;
use Library\Eloquent\Auth\User;
use Library\Eloquent\Company;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class EditUsersTest extends TestCase
{
    use AuthenticatesAdmin, WithFaker;

    /**
     * @test
     */
    public function an_admin_can_see_the_edit_user_form()
    {
        $user = create(User::class);

        $this->get("/users/$user->id/edit")
            ->assertSuccessful()
            ->assertViewHas('editing', true)
            ->assertSee('name="name"')
            ->assertSee('name="email"')
            ->assertSee('name="type"')
            ->assertSee('name="company"')
            ->assertSee('name="department"');
    }

    /**
     * @test
     */
    public function an_admin_can_update_a_user()
    {
        $user = create(User::class);

        [$name, $email, $company] = [$this->faker->name, $this->faker->email, create(Company::class), ];
        $type = $this->faker->randomElement(UserType::options());

        $this->patch("/users/$user->id", [
            'name' => $name,
            'email' => $email,
            'company' => $company->id,
            'type' => $type,
        ])
            ->assertStatus(302)
            ->assertRedirect('/users')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => $name,
            'email' => $email,
            'company_id' => $company->id
        ]);
    }
}