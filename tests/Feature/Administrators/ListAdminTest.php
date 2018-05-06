<?php

namespace Tests\Feature\Administrators;

use Library\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Library\Eloquent\Auth\Administrator;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class ListAdminTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_see_the_list_of_administrators()
    {
        $administrators = create(Administrator::class, [], 3);

        $response = $this->get('/administrators')
            ->assertSuccessful();

        foreach ($administrators as $administrator) {
            $response->assertSeeText(e($administrator->name))
                ->assertSeeText(e($administrator->email));
        }
    }
}