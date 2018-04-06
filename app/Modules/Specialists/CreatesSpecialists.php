<?php

namespace App\Modules\Specialists;

use App\Http\Controllers\Controller;
use App\Modules\Specialists\Responses\SpecialistsPage;

class CreatesSpecialists extends Controller
{
    public function __invoke(SpecialistsPage $page)
    {
        return $page->create();
    }
}