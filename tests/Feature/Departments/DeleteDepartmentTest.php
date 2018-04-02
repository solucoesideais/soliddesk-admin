<?php

namespace Tests\Feature\Departments;

use Library\Eloquent\Department;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class DeleteDepartmentTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_delete_departments_not_in_use()
    {
        $department = create(Department::class);

        $this->delete("/departments/$department->id")
            ->assertStatus(302)
            ->assertRedirect('/departments');

        $this->assertDatabaseMissing('departments', [
            'id' => $department->id
        ]);

    }
}