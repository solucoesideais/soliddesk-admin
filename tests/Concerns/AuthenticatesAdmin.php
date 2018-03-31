<?php

namespace Tests\Concerns;

use Illuminate\Contracts\Auth\Authenticatable;
use Library\Eloquent\Auth\Administrator;

trait AuthenticatesAdmin
{
    /**
     * @var Administrator
     */
    protected $admin;

    public function authenticatesAdmin()
    {
        $this->actingAs($this->admin = create(Administrator::class));
    }

    abstract public function actingAs(Authenticatable $user, $driver = null);
}