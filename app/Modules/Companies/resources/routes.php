<?php

use App\Modules\Companies\CreatesCompanies;
use App\Modules\Companies\DisplaysCompanies;
use Illuminate\Support\Facades\Route;

Route::get('/companies', DisplaysCompanies::class);
Route::get('/companies/create', CreatesCompanies::class);
