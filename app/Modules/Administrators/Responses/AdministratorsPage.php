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

    public function index()
    {
        return view('administrators::index')
            ->with('administrators', $this->administrator->paginate(10))
            ->with('creating', $this->creating);
    }

    public function create()
    {
        return $this->index()
            ->with('creating', true);
    }
}