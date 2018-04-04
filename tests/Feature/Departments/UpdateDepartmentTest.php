<?php

namespace Tests\Feature\Departments;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Library\Eloquent\Auth\Administrator;
use Library\Eloquent\Department;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class UpdateDepartmentTest extends TestCase
{
    use AuthenticatesAdmin, WithFaker;

    /**
     * @test
     */
    public function an_admin_can_see_the_edit_department_form()
    {
        $department = create(Department::class);

        $this->get("/departments/$department->id/edit")
            ->assertSuccessful()
            ->assertViewHas('editing', true)
            ->assertViewHas('record')
            ->assertSee('name="name"');
    }

    /**
     * @test
     */
    public function an_admin_can_update_a_department()
    {
        $department = create(Department::class);
        $name = 'new name';

        $this->patch("/departments/$department->id", [
            'name' => $name
        ])
        ->assertStatus(302)
        ->assertRedirect('/departments')
        ->assertSessionHas('success');

        $this->assertDatabaseHas('departments', [
            'id' => $department->id,
            'name' => $name
        ]);
    }
}