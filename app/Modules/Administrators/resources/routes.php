<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Administrators\CreatesAdministratorsForm;
use App\Modules\Administrators\StoresAdministrators;

Route::get('/administrators/create', CreatesAdministratorsForm::class);
Route::post('/administrators', StoresAdministrators::class);