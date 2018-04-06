<?php

namespace Tests\Feature\Specialists;

use Library\Eloquent\Auth\Specialist;
use Tests\Concerns\AuthenticatesAdmin;
use Tests\TestCase;

class ListSpecialistsTest extends TestCase
{
    use AuthenticatesAdmin;

    /**
     * @test
     */
    public function an_admin_can_list_all_specialists()
    {
        $user = create(Specialist::class);

        $this->get('/specialists')
            ->assertSuccessful()
            ->assertSeeText(e($user->email))
            ->assertSeeText(e($user->name));
    }
}