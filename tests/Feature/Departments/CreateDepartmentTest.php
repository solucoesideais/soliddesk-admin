<?php

namespace Tests\Feature\Departments;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Library\Eloquent\Auth\Administrator;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class CreateDepartmentTest extends TestCase
{
    use AuthenticatesAdmin, WithFaker;

    /**
     * @test
     */
    public function an_admin_can_see_the_create_department_form()
    {
        $this->get('/departments/create')
            ->assertSuccessful()
            ->assertViewHas('creating', true)
            ->assertSee('name="name"');
    }

    /**
     * @test
     */
    public function an_admin_can_create_a_department()
    {
        $name = $this->faker->words(3, true);

        $this->post('/departments', [
            'name' => $name,
        ])
            ->assertStatus(302)
            ->assertRedirect('/departments')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('departments', [
            'name' => $name,
        ]);
    }

    /**
     * @test
     */
    public function test_validation()
    {
        $this->post('/departments')
            ->assertStatus(302)
            ->assertSessionHasErrorsIn(BaseFormRequest::FORM_ERROR_BAG, ['name']);
    }
}