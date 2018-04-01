<?php

namespace App\Modules\Administrators\Responses;

use Library\Eloquent\Auth\Administrator;

class AdministratorsPage
{
    /**
     * @var Administrator
     */
    private $administrator;

    private $creating = false;

    public function __construct(Administrator $administrator)
    {
        $this->administrator = $administrator;
    }

    public function view()
    {
        return view('administrators::manage')
            ->with('administrators', $this->administrator->paginate(10))
            ->with('creating', $this->creating);
    }

    public function creating(): self
    {
        $this->creating = true;

        return $this;
    }
}