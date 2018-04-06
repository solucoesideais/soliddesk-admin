<?php

namespace Tests\Feature\Specialists;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Library\Eloquent\Auth\Specialist;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class CreateSpecialistTest extends TestCase
{
    use AuthenticatesAdmin, WithFaker;

    /**
     * @test
     */
    public function an_admin_can_see_the_create_specialist_form()
    {
        $this->get('/specialists/create')
            ->assertSuccessful()
            ->assertViewHas('creating', true)
            ->assertSee('name="name"')
            ->assertSee('name="email"')
            ->assertSee('name="role"');
    }

    /**
     * @test
     */
    public function an_admin_can_store_a_new_specialist()
    {
        [$name, $email, $password, $role] = [$this->faker->name, $this->faker->email, $this->faker->password, $this->faker->words(3, true)];

        $this->post('/specialists', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => $role,
        ])
            ->assertStatus(302)
            ->assertRedirect('/specialists')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('specialists', [
            'name' => $name,
            'email' => $email,
            'role' => $role,
        ]);

        $this->assertTrue(
            Hash::check($password,
                Specialist::where('email', $email)->first()->password
            )
        );
    }
}