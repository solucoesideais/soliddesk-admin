<?php

namespace App\Concerns\Bags;

use Illuminate\Support\Facades\Hash;

/**
 * @property array $attributes
 */
trait HashesPasswords
{
    protected function hashPassword(): void
    {
        if (isset($this->attributes['password'])) {
            $this->attributes['password'] = Hash::make($this->attributes['password']);
        }
    }
}
