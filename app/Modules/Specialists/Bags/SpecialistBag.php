<?php

namespace App\Modules\Specialists\Bags;

use App\Concerns\Bags\HashesPasswords;

class SpecialistBag
{
    use HashesPasswords;

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
}
