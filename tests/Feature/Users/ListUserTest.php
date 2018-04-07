<?php

namespace Tests\Feature\Users;

use Library\Eloquent\Auth\User;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class ListUserTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_list_users()
    {
        $user = create(User::class);

        $this->get('/users')
            ->assertSuccessful()
            ->assertSeeText(e($user->email))
            ->assertSeeText(e($user->name))
            ->assertSeeText($user->created_at->format('d/m/Y H:i:s'));

    }
}
