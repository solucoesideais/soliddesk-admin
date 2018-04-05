<?php

namespace App\Modules\Users\Bags;

use App\Concerns\Bags\HashesPasswords;

class UserBag
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

        $this->company();

        return $this->attributes;
    }

    private function company(): void
    {
        $this->attributes['company_id'] = $this->attributes['company'];

        unset($this->attributes['company']);
    }
}
