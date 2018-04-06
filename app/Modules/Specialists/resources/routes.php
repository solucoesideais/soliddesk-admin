<?php

use App\Modules\Specialists\CreatesSpecialists;
use App\Modules\Specialists\DisplaysSpecialists;
use App\Modules\Specialists\StoresSpecialists;
use Illuminate\Support\Facades\Route;

Route::get('/specialists', DisplaysSpecialists::class);
Route::post('/specialists', StoresSpecialists::class);
Route::get('/specialists/create', CreatesSpecialists::class);
