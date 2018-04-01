<?php

namespace Tests\Feature\Administrators;

use Library\Eloquent\Department;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class ListDepartmentTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_see_the_list_of_departments()
    {
        $departments = create(Department::class, [], 3);

        $response = $this->get('/departments')
            ->assertSuccessful();

        foreach ($departments as $department) {
            $response->assertSeeText(e($department->name));
        }
    }
}