<?php

namespace Tests\Feature\Administrators;

use Library\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Library\Eloquent\Auth\Administrator;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class DeleteAdminTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_delete_another_admin()
    {
        $administrator = create(Administrator::class);

        $this->delete("/administrators/$administrator->id")
            ->assertStatus(302)
            ->assertRedirect('/administrators');

        $this->assertSoftDeleted('administrators', [
            'id' => $administrator->id,
            'email' => $administrator->email
        ]);

    }
}