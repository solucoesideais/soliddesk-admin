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

        $this->department();

        return $this->attributes;
    }

    private function company(): void
    {
        $this->attributes['company_id'] = $this->attributes['company'];

        unset($this->attributes['company']);
    }

    private function department()
    {
        if (isset($this->attributes['department'])) {
            $this->attributes['department_id'] = $this->attributes['department'];

            unset($this->attributes['department']);
        }
    }
}
