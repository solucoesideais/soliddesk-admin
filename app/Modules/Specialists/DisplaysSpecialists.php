<?php

namespace App\Modules\Specialists;

use App\Http\Controllers\Controller;
use App\Modules\Specialists\Responses\SpecialistsPage;

class DisplaysSpecialists extends Controller
{
    public function __invoke(SpecialistsPage $page)
    {
        return $page->index();
    }
}