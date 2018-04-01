<?php

namespace App\Modules\Administrators\Bags;

use Illuminate\Support\Facades\Hash;

class AdministratorBag
{
    /**
     * @var array
     */
    private $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function attributes(): array
    {
        $this->hashPassword();

        return $this->attributes;
    }

    private function hashPassword(): void
    {
        $this->attributes['password'] = Hash::make($this->attributes['password']);
    }

}